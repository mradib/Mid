<?php
/**
 * Created by PhpStorm.
 * User: ctbd
 * Date: 6/22/2019
 * Time: 6:32 PM
 */
?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <script>
            function Confirmation() {
                var del=confirm("Are you sure you want to delete this record?");
                if (del==true){
                    return true;
                }
                else{
                    return false;
                }
            }
            

        </script>
    </head>
    <body>


<?php
class Form_Task
{

    private function NavBar(){?>
        <div class="Nav">

            <form action="index_task.php" method="post">
                <input type="submit" name="IndexBtn" value="Type Message">
            </form>
            <form action="LogIn_Task.php" method="post">
                <input type="submit" name="LogInBtn" value="LogIn">
            </form>
            <form action="Registration.php" method="post">
                <input type="submit" name="ListBtn" value="Registration">
            </form>


        </div>

        <?php
    }
    public function MessageShow()
    {

            $this->NavBar();
        ?>
        <div id="messageArea">
            <form action="Task.php" method="post">

                <textarea name="Task" placeholder="Type Your Task Here"></textarea>
                <br>
                <input type="submit" name="SubmitBtn" class="Btn" value="Submit">
            </form>
        </div>




<?php
    }

    public function RegisterPage()
    {
        $this->NavBar();
        ?>
        <div id="messageArea">
            <form action="Registration.php" method="post" enctype="multipart/form-data">
                <input type="text" name="name" placeholder="Name"><br>
                <span id="NameSpan" style="color: #e8491d"></span>
                <input type="email" name="email" placeholder="Email"><br>
                <span id="EmailSpan" style="color: #e8491d"></span>
                <input type="text" name="password" placeholder="Password"><br>
                <span id="PriceSpan" style="color: #e8491d"></span>

                <input type="submit" name="Register" class="Btn" value="Submit">
            </form>
        </div>


<?php
    }

    public function LogInPage()
    {
        $this->NavBar();
        ?>
        <div id="messageArea">
            <form action="LogIn_Task.php" method="post" enctype="multipart/form-data">

                <input type="email" name="email" placeholder="Email"><br>
                <span id="EmailSpan" style="color: #e8491d"></span>
                <input type="password" name="password" placeholder="Password"><br>
                <span id="PasswordSpan" style="color: #e8491d"></span>
                <input type="submit" name="LogIn" class="Btn" value="Submit">
            </form>
        </div>


        <?php
    }

    public function Messages($data)
    {
        $this->NavBar();
        ?>

            <table border="1">
                <th>Message</th>
                <th>Delete</th>
                <th>Mark</th>
                <?php foreach ($data as $d){?>

                    <tr>
                        <td align="center"><?php echo $d['Task'] ?></td>
                        <td align="center"><form action="Delete_Task.php" method="post" onsubmit="return Confirmation()">
                                <input type="hidden" name="Task" value="<?php echo $d['Task'] ?>">
                                <input type="submit" name="DeleteTask"  class="TableBtn" value="Delete">
                            </form></td>
                        <td align="center"><form name="ChangeName" action="Tasks.php" method="post">
                                <input type="hidden" name="Task" value="<?php echo $d['Task'] ?>">
                                <input type="hidden" name="IsMarked"   value="<?php echo $d['Task'] ?>">
                                <?php
                                if($d["IsImportant"]=="True"){

                                    ?>
                                    <input type="submit" id="<?php echo $d['Task'] ?>" name="MarkImp" class="TableBtn" value="Marked" onclick="changeName(<?php echo $d['Task'] ?>)">

                                    <?php
                                }
                                else{
                                    ?>
                                    <input type="submit" id="<?php echo $d['Task'] ?>" name="MarkImp" class="TableBtn" value="Unmarked" onclick="changeName(<?php echo $d['Task'] ?>)">

                                    <?php
                                }

                                ?>
                            </form></td>
                    </tr>
                <?php  }?>
            </table>


        <?php
    }
}

?>

    </body>
</html>


