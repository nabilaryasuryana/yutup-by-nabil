<h2 class="text-center mt-5">Selamat datang <?php echo $_SESSION['username']; ?> di halaman admin</h2>
<?php  
                while($user_data = mysqli_fetch_array($result)) 
                {         
                    echo "<tr>";
                        echo "<td class='border border-2 border-black bg-info-subtle'>".$user_data['id']."</td>";
                        echo "<td class='border border-2 border-black bg-light'>".$user_data['nama']."</td>";
                        echo "<td class='border border-2 border-black bg-light'>".$user_data['username']."</td>";  
                        echo "<td class='border border-2 border-black bg-light'>".$user_data['password']."</td>";  
                        echo "<td class='border border-2 border-black bg-light'>".$user_data['email']."</td>"; 
                        echo "<td class='border border-2 border-black bg-light'>".$user_data['hp']."</td>";     
                        echo "<td class='border border-2 border-black bg-light'><a href='edit.php?id=$user_data[id]' class='btn btn-primary p-1'>Edit</a> | <a href='delete.php?id=$user_data[id]' class='btn btn-danger p-1'>Delete</a></td></tr>";        
                }
            ?>