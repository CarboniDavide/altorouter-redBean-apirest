<div class="content">
    <h2>Categories</h2>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Created</th>
            <th>Modified</th>
        </tr>
        <?php foreach ($categories as $category) { ?>
        <tr>
            <td><?= $category['id'] ?></td>
            <td><?= $category['name'] ?></td>
            <td><?= $category['description'] ?></td>
            <td><?= $category['created'] ?></td>
            <td><?= $category['modified'] ?></td>
        </tr>
        <?php } ?>
    </table>
</div>