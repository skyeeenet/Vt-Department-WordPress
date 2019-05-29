<?php
/*
Template Name: Расписание
*/
?>
<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="text-center mt-5">
                <h1 class="title">Расписание</h1>
                <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="row mt-4 d-flex justify-content-center">
                        <form class="mr-3" action="" method="post">
                            <select name="day" id="day">
                                <?php
                                $days = get_terms(['taxonomy' => 'day', 'hide_empty' => false, 'orderby' => 'id']);
                                $weeks = get_terms(['taxonomy' => 'week', 'hide_empty' => false, 'orderby' => 'id']);
                                $groups = get_terms(['taxonomy' => 'group', 'hide_empty' => false, 'orderby' => 'id']);
                                ?>
                                <?php foreach ($days as $day): ?>
                                    <option value="<?php echo $day->slug; ?>"><?php echo $day->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <select name="week" id="week">
                                <?php foreach ($weeks as $week): ?>
                                    <option value="<?php echo $week->slug; ?>"><?php echo $week->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <select name="group" id="group">
                                <?php foreach ($groups as $group): ?>
                                    <option value="<?php echo $group->slug; ?>"><?php echo $group->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <button id="schedule_show" class="btn btn-primary p-1 schedule-btn">Отобразить</button>
                        </form>

                    </div>
                    <table class="table table-responsive-lg mt-4">
                        <thead>
                        <tr>
                            <th>Пара</th>
                            <th>Дисциплина</th>
                            <th>Тип пары</th>
                            <th>Преподаватель</th>
                        </tr>
                        </thead>
                        <tbody id="schedule-container">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
