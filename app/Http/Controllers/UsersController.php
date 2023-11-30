<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function query(Request $request, $q)
    {
        if ($q !== 0) {
            $query = $q;
        } else {
            $query = $request->input('q');
        }
        $data = User::where('name', 'LIKE', "%$query%")->get();
        
        $html = '';
        ?><div><?php
        foreach ($data as $user_data) {
            echo '<tr class="h-2 p-2" id="search-results">';
            echo "<td class='border border-lg border-black text-center bg-green-600 h-2'>" . $user_data['id'] . "</td>";
            echo "<td class='border border-lg border-black text-center bg-green-600 h-2'>" . $user_data['name'] . "</td>";
            echo "<td class='border border-lg border-black text-center bg-green-600 h-2'>" . $user_data['password'] . "</td>";
            echo "<td class='border border-lg border-black text-center bg-green-600 h-2'>" . $user_data['email'] . "</td>";
            echo "<td class='border border-lg border-black text-center bg-green-600 h-2'>" . $user_data['jurusan'] . "</td>";
            echo "<td class='border border-lg border-black text-center bg-green-600 h-2'>" . $user_data['JK'] . "</td>";
            echo "<td class='border border-lg border-black text-center bg-green-600 h-2'><a href='/Edit?id=" . $user_data["id"] . "' class='justify-center rounded-md border bg-green-600 mx-auto self-center text-white itim  hover:border-green-300 hover:bg-green-700 border-gray-500'>Edit</a> | <a href='' class='justify-center rounded-md border bg-red-600 mx-auto self-center text-white itim  hover:border-red-300 hover:bg-red-700 border-gray-500'>Delete</a></td>";
            echo "</tr>";
        }
        ?>
        </div>
        <?php
    }
}
