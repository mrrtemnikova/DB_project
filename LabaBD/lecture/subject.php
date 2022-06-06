<?php 
if(!isset($system_path)){ die('You shall not pass :)'); } 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Stu_Sub_Select</title>
	<link rel="stylesheet" type="text/css" href="css\style1.css">
	<style type="text/css">
		body{
			background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.7)),url(lechall.jpg);
			background-size: cover;
			background-attachment:fixed;

		}

        .dropdown{
                display:table-row;
                position:relative;
            }

        .dropdown button{
	            border:none;
	            padding:8px 16px;
	            background-color:rgb(148, 0, 0);
	            color:white;
	            transition:.3s;
	            cursor:pointer;
	            min-width:200px;
}

            .dropdown:hover button{
                background-color:DarkGreen;
            }

            .dropdown div{
                background-color:#fff;
                box-shadow:0 4px 8px rgba(0,0,0,0.2);
                z-index:1;
                visibility:hidden;
                position:absolute;
                min-width:200px;
                opacity:0;
                transition:.3s;
                position:top;
            }

            #table1 {
                border-collapse: separate;
                border-spacing: 15px;
                display: table;
            }

            .dropdown:hover div{
                visibility:visible;
                opacity:1;
            }

            .dropdown div a{
                display:block;
                text-decoration:none;
                padding:8px;
                color:#000;
                transition:.1s;
                white-space:nowrap;
            }

            .dropdown div a:hover{
                background-color:Black;
                color:#fff;
            }
        
    
	</style>
</head>
    </head>
    <body>
        <?php echo $m_menu; ?>
        <center>
            <?php if(!isset($_GET['sub_id'])==TRUE || empty($_GET['sub_id'])==TRUE){ ?>
               
            <?php }else{ ?>
                
            <?php } ?>
            <br /><br /><br /><br />
            <b>
                <div id="table1">
                    <?php if(!isset($_GET['sub_id'])==TRUE || empty($_GET['sub_id'])==TRUE){ ?>
                        <div class="banner-text">
                            <div>
                                <?php
                                    foreach ($subjects as $v) {
										if(in_array($v['id'], unserialize($_SESSION['kelylogin']['sub']))){
											echo '<a href="?sub_id=' . $v['id'] . '">' . $v['subject_name'] . ((!empty($v['descr'])==TRUE)?' - '.$v['descr']:'') . '</a>';
										}
                                    }
                                ?>
                            </div>
                        </div>
                    <?php }else{ ?>
                        <div class="banner-text">
                        <br /><br />
                            <b></b>
                            <div>
                                <?php
                                    foreach ($cn as $v) {
                                        echo '<a href="?sub_id='.$_GET['sub_id'].'&sub=' . $v . '">' . str_replace('_', ' ', $v) . '</a>';
                                    }
                                ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <br /><br /><br /><br />       
            </b>
        </center>
    </body>
</html>