branch getpost: 用 get post 做登入檢查<br>
branch session: 用 session 做會員登入登出<br>
branch cookie: 用 cookie 做會員登入登出<br>
branch member: 用 include 引入 navbar<br>
branch subquery: 用 inner join 與 subquery 做出學生成績排名表格<br>
branch ajax: 用 xhr, fetch, jquery, axios 的 ajax。kktix.php是用php取用kktix.json，用以與ajax的方式比較。<br>
app2，用ajax做CRUD：<br>
v1版本~雖然可以運作，但有需要簡化的地方<br>
v2版本~JS把user_layout放到function render()，與簡化query.php<br>
v3版本~在query.php foreach提取資料，自動產生class button<br>
v4版本~在JS forEach提取資料，自動產生class button<br>
v5版本~變更query.php 的class寫法。index.html無變更<br>
query.php，加上 SELECT id<br>
index.html加上 刪除、新增、編輯功能<br>
branch memberPhpSql: 用Php與Sql做會員註冊登入功能<br>