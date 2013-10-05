<html lang="en">
<?php $url = base_url(); ?>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>home</title>
    <link type="text/css" href="<?php echo $url; ?>/format/apycom/menu.css" rel="stylesheet" />
    <script type="text/javascript" src="<?php echo $url; ?>/format/apycom/jquery.js"></script>
    <script type="text/javascript" src="<?php echo $url; ?>/format/apycom/menu.js"></script>
    
    
    
</head>
<body>

<style type="text/css">
* { margin:0;
    padding:0;
}
body { background:#FFFFFF; }
div#menu {
    margin:0px auto;
    width:100%;
}

</style>

<div id="menu">
    <ul class="menu">
        <li><a href="#" class="parent"><span>Manage Role</span></a>
            <div><ul>  
                <li><a href="<?php echo $url; ?>index.php/usermanagement/role/add"><span>Add new role</span></a></li>                
                <li><a href="<?php echo $url; ?>index.php/usermanagement/role/update"><span>Update role</span></a></li>
                <li><a href="<?php echo $url; ?>index.php/usermanagement/role/delete"><span>Delete role</span></a></li>
                <li><a href="<?php echo $url; ?>index.php/usermanagement/role/finduser"><span>Find users with the same role</span></a></li>                
                <li><a href="<?php echo $url; ?>index.php/usermanagement/role/"><span>View list role</span></a></li>
                
            </ul></div>
        </li>
        <li><a href="#" class="parent"><span>Manage Users</span></a>
            <div><ul>                
                <li><a href="#"><span>Add new user</span></a></li>
                <li><a href="#"><span>List user</span></a></li>
                <li><a href="#"><span>Delete users</span></a></li>
                <li><a href="#"><span>Update user info</span></a></li>       
                <li><a href="#"><span>Find users</span></a></li>
            </ul></div>
        </li>
        
        <li><a href="#"><span>Function</span></a>
             <div><ul>                
                <li><a href="#"><span>Add new GroupFunction</span></a></li>
                <li><a href="#"><span>List GroupFuntion</span></a></li>
                <li><a href="#"><span>Update GroupFunction</span></a></li>
                <li><a href="#"><span>Delete GroupFunction</span></a></li>
                <li><a href="#"><span>Add new Function</span></a></li>
                <li><a href="#"><span>Update Function</span></a></li>
                <li><a href="#"><span>Delete Function</span></a></li>
                
            </ul></div>
        
        </li>
        <li><a href="#"><span>Permision</span></a>
             <div><ul>                
                <li><a href="#"><span>Add new permision</span></a></li>
                <li><a href="#"><span>Update permision</span></a></li>
                <li><a href="#"><span>Delete permision</span></a></li>
                <li><a href="#"><span>Find permission of a role</span></a></li>
            </ul></div>
        
        </li>
    </ul>
</div>
<?php











?>
<div id="copyright"><a href="http://apycom.com/"></a></div>
</body>
</html>