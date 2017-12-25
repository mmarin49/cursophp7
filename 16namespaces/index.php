<?php
require "Admin/Blog.php";
require "Admin/Usuario.php";
require "Blog.php";

use Admin\Blog as B;
use Admin\Usuario as U;

$adminBlog=new B();
echo "<BR>";
$adminUsuario=new U();
echo "<BR>";
$blog= new Blog();