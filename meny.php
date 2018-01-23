<?php require 'partials/head.php'; ?>
<?php include 'partials/menu_arrays.php'; ?>
<main>
    <div class="menu-wrapper">
        <h1>Vår meny</h1>
        <div class="menu-flex-wrapper">
            
            <?php foreach($main_meals as $title => $array):?>
                <div class="meal-courses">
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

            <div class="meal-courses">

                <?php foreach($small_meals as $title => $array):?>
                    <div class="small-meal-wrap">
                        <table>
                            <tr>
                                <th><?= $title; ?></th>
                            </tr>
                            <?php foreach($array as $meal):?>
                                <tr>
                                    <td><?= $meal['title']; ?></td>
                                    <td><span class="align-right"><?= $meal['price']; ?></span></td>
                                </tr>
                                <?php if(!empty($meal['description'])):?>
                                    <tr>
                                        <td class="description"><?= $meal['description']; ?></td>
                                    </tr>
                                <?php endif;?>
                            <?php endforeach;?>
                        </table>
                    </div><!--meal-wrap-->
                <?php endforeach; ?>
            </div><!--meal-courses-->
        </div><!--menu-flex-wrapper-->

        <div class="allergy-box">
            <p>*Utan gluten, eller går att få utan gluten.</p>
            <p>**Veganskt.</p>
        </div>
        
    </div><!--menu-wrapper-->
</main>

<?php require 'partials/footer.php'; ?>