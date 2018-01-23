<?php require 'partials/head.php'; ?>
<?php include 'partials/menu_arrays.php'; ?>
<main>
    <div class="menu-wrapper">
        <h1>Vår meny</h1>
        <div class="menu-flex-wrapper">
            
            <?php 
            foreach($main_meals as $title => $array):?>
                <div class="main-courses">
                    <div class="meal-wrap">
                        <table>
                            <tr>
                                <th><?= $title; ?></th>
                            </tr>
                            <?php foreach($array as $meal):?>
                                <tr>
                                    <td><?= $meal['title']; ?></td>
                                    <td><span class="align-right"><?= $meal['price']; ?></span></td>
                                </tr>
                                <tr>
                                    <td class="description"><?= $meal['description']; ?></td>
                                </tr>
                            <?php endforeach;?>
                        </table>
                    </div>
                </div>
            <?php endforeach; ?>
                

            
            <div class="other-courses">
              
                <div class="small-courses">
                    <table>
                        <tr>
                            <th>Smårätter</th>
                        </tr>
                       <?php for($i = 0; $i < count($small_meals); $i++): ?>
                            <tr>
                                <td><?= $small_meals[$i]['title']; ?> </td>
                                <td><span class="align-right"><?= $small_meals[$i]['price']; ?></span></td>
                            </tr>
                            <tr>
                                <td class="description"><?= $small_meals[$i]['description']; ?></td>
                            </tr>
                        <?php endfor; ?>
                    </table>
                </div>

                <div class="child-courses">
                    <table>
                        <tr>
                            <th>För barn</th>
                        </tr>
                        <?php for($i = 0; $i < count($child_meals); $i++): ?>
                            <tr>
                                <td><?= $child_meals[$i]['title']; ?></td>
                                <td><span class="align-right"><?= $child_meals[$i]['price']; ?></span></td>
                            </tr>
                        <?php endfor; ?>
                    </table>
                </div>

                <div class="desserts">
                    <table>
                        <tr>
                            <th>Sött</th>
                        </tr>
                        <?php for($i = 0; $i < count($desserts); $i++): ?>
                        <tr>
                            <td><?= $desserts[$i]['title']; ?></td>
                            <td><span class="align-right"><?= $desserts[$i]['price']; ?></span></td>
                        </tr>
                        <?php if(!empty($desserts[$i]['description'])): ?>
                            <tr>
                                <td class="description"><?= $desserts[$i]['description']; ?></td>
                            </tr>
                        <?php endif;
                        endfor;?>
                    </table>
                </div>
            </div><!--other-courses-->
        </div><!--menu-flex-wrapper -->
    </div><!--menu-wrapper-->
</main>

<?php require 'partials/footer.php'; ?>