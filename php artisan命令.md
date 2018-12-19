启动服务PHP内置服务

php artisan  servr --port: 指定的端口号

查看定义好的路由

php artisan route:list

创建控制器

php artisan make:controller 控制器名Controller       一般控制器

php artisan make:controller 控制器名Controller  -r   资源控制器

php artisan make:controller 目录名/控制器名Controller 

php artisan make:request UserRequest  验证器

php artisan make:migration create_test_table --create=test  生成数据文件

php artisan migrate  执行数据迁移

php artisan migrate:rollback  回滚迁移

php artisan migrate:refresh   清除表并迁移

php artisan make:seeder 文件名

php artisan migrate db:seed --class=文件名 执行指定种子文件

php artisan migrate:refresh  --seed 删除表并执行种子文件  必须在Databaseseeder 定义call