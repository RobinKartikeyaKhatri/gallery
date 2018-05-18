<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Blank Page
                <small>Subheading</small>
            </h1>

            <?php

                // $query = "SELECT * FROM users";

                // $result = $database->query($query);
                // while($row = mysqli_fetch_array($result))
                // {
                //     echo $username = $row['username'];
                // }

                
                // $result_set = User::find_all_users();
                
                // while($row = mysqli_fetch_array($result_set))
                // {
                //     echo $id         = $row['id'] . "<br/>";
                //     echo $username   = $row['username'] . "<br/>";
                //     echo $password   = $row['password'] . "<br/>";
                //     echo $first_name  = $row['first_name'] . "<br/>";
                //     echo $last_name   = $row['last_name'] . "<br/>";
                // }

                // $found_user = User::find_user_by_id(1);

                // $user = User::instantiation($found_user);
                
                // echo $user->username;
                // echo $user->first_name;
                // echo $user->last_name;

                $users = User::find_all_users();

                foreach ($users as $user) 
                {
                    echo $user->id . "<br/>";
                    echo $user->username . "<br/>";
                    echo $user->password . "<br/>";
                    echo $user->first_name . "<br/>";
                    echo $user->last_name . "<br/>";
                }
                

            
                



            
            ?>

            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->