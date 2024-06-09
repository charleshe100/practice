INSERT INTO `table`(`col1`,`col2`) VALUES ('value1','value2');
SELECT `col1`,`col2` FROM `table1`,`table2` WHERE 條件式;
UPDATE `table` SET `col1`='value1',`col2`='value2' WHERE 條件式;
DELETE FROM `table` WHERE 條件式;

-- 1. 撈出某班的學生成績
-- 101班與學號
SELECT `class_code`,`school_num` as `學號` FROM `class_student` WHERE `class_student`.`class_code`='101';
-- 101班的學號與分數
-- B
SELECT `class_student`.`school_num` as `學號`, `student_scores`.`score` as `分數` FROM `student_scores` INNER JOIN `class_student` ON `student_scores`.`school_num`=`class_student`.`school_num` AND `class_student`.`class_code`='101';
-- 101班的姓名與學號
-- A
SELECT  `students`.`name` as `姓名`,`class_student`.`school_num` as `學號` FROM `students` INNER JOIN `class_student` ON `students`.`school_num`=`class_student`.`school_num` AND `class_student`.`class_code`='101';

-- 2. 按照成績由高到低排序
SELECT `A`.`name` as `姓名`,`B`.`score` as `分數` 
FROM 
    (SELECT  `students`.`name`,`class_student`.`school_num` 
     FROM `students` 
     INNER JOIN `class_student` 
     ON `students`.`school_num`=`class_student`.`school_num` AND `class_student`.`class_code`='101')A, 
    (SELECT `class_student`.`school_num`, `student_scores`.`score` 
     FROM `student_scores` 
     INNER JOIN `class_student` 
     ON `student_scores`.`school_num`=`class_student`.`school_num` AND `class_student`.`class_code`='101')B 
WHERE `A`.`school_num`=`B`.`school_num` 
ORDER BY `B`.`score` DESC
-- 上面用子查詢，下面用內部查詢，()裡面的結尾，不要有;
SELECT `A`.`name` AS `姓名`, `B`.`score` AS `分數`
FROM 
    (SELECT `students`.`name`, `class_student`.`school_num`
     FROM `students`
     INNER JOIN `class_student` 
     ON `students`.`school_num` = `class_student`.`school_num`
     WHERE `class_student`.`class_code` = '101') AS A
INNER JOIN 
    (SELECT `class_student`.`school_num`, `student_scores`.`score`
     FROM `student_scores`
     INNER JOIN `class_student` 
     ON `student_scores`.`school_num` = `class_student`.`school_num`
     WHERE `class_student`.`class_code` = '101') AS B
ON `A`.`school_num` = `B`.`school_num`  
ORDER BY `B`.`score` DESC

-- 3. 增加一個欄位：名次
-- 使用窗口函數 ROW_NUMBER() OVER (ORDER BY column_name [ASC|DESC])
SELECT `A`.`name` as `姓名`,`B`.`score` as `分數`, ROW_NUMBER() OVER (ORDER BY `B`.`score` DESC) AS `名次`
FROM 
    (SELECT  `students`.`name`,`class_student`.`school_num` 
     FROM `students` 
     INNER JOIN `class_student` 
     ON `students`.`school_num`=`class_student`.`school_num` AND `class_student`.`class_code`='101')A, 
    (SELECT `class_student`.`school_num`, `student_scores`.`score` 
     FROM `student_scores` 
     INNER JOIN `class_student` 
     ON `student_scores`.`school_num`=`class_student`.`school_num` AND `class_student`.`class_code`='101')B 
WHERE `A`.`school_num`=`B`.`school_num` 
ORDER BY `B`.`score` DESC
-- 簡化
SELECT `姓名`, `分數`, ROW_NUMBER() OVER (ORDER BY `分數` DESC) AS `名次`
FROM (
    SELECT 
        `students`.`name` AS `姓名`,
        `student_scores`.`score` AS `分數`
    FROM `students`
    INNER JOIN `class_student` ON `students`.`school_num` = `class_student`.`school_num`
    INNER JOIN `student_scores` ON `students`.`school_num` = `student_scores`.`school_num`
    WHERE `class_student`.`class_code` = '101'
) AS subquery;

