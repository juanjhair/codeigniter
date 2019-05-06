
<table>
    <thead>
        <th>id</th>
        <th>name</th>
        <th>surname</th>
    </thead>
    <tbody>
        <?php foreach($user as $value) { ?>
            <tr>
                <td><?php echo $value->id; ?></td>
                <td><?php echo $value->name; ?></td>
                <td><?php echo $value->surname; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<br>
<br>
<br>

<form action="?/usuario/saveUser" method="post">
    <label for="name">Name</label>
    <input type="text" name="name" value="name">
    <br>
    <label for="surname">Surname</label>
    <input type="text" name="surname" value="surname">
    <br>
    <button type="submit">Submit</button>
</form>


