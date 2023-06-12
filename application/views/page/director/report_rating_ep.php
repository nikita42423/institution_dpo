<!-- <link href="assets/css/dashboard.css" rel="stylesheet"> -->

<main class="ms-sm-auto col-lg-12 px-md-4 container">
    <h1 class="text-center display-6 m-3">Просмотр сведений о рейтинге образовательных программ ДПО</h1>

    <!-- Период с ... по ... -->
    <form class="justify-content-md-center mb-3 card" action="" method="post">
        <div class="card-header">
            Период
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-3">
                    <label for="name_form" class="form-label">Дата с</label>
                    <input type="date" class="form-control filter_rating_ep" id="date1_rating_ep" name="date1_rating_ep">
                </div>
                <div class="col-3">
                    <label for="name_form" class="form-label">Дата по</label>
                    <input type="date" class="form-control filter_rating_ep" id="date2_rating_ep" name="date2_rating_ep">
                </div>
            </div>
        </div>
    </form>

    <div class="table-responsive table_director">
        <table class="table table-hover table-sm" id="table_rating_ep">
            <thead class="table-dark">
                <tr>
                    <th>№Рейтинг</th>
                    <th>Вид</th>
                    <th>Направление</th>
                    <th>Наименование ОП</th>
                    <th>Кол-во</th>
                    <th>Сумма</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1;
                    foreach ($rating_ep as $row) {?>
                    <tr>
                        <td><?=$i++?></td>
                        <td><?=$row['name_type_ep']?></td>
                        <td><?=$row['name_focus']?></td>
                        <td><?=$row['name_ep']?></td>
                        <td><?=$row['count_price']?></td>
                        <?php
                            if ($row['sum_price'] == NULL)
                            {
                                echo '<td><b>0.00₽</b></td>';
                            }
                            else
                            {
                                echo '<td><b>'.$row['sum_price'].'₽</b></td>';
                            }
                        ?>                    
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Диаграмма</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
    </div>
    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
    <!-- здесь будет запрос из бд надо вывести его результаты в html таблицу например -->
</main>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
<script src="assets/js/dashboard.js"></script>

<!-- Скрипт для таблицы (поиск и пагинация) -->
<script>
    $(document).ready(function() {
        var table = $('#table_rating_ep').DataTable({
            lengthChange:false,
            buttons: ['excel', 'pdf'] //['copy', 'csv', 'excel', 'pdf', 'print']
        });
        table.buttons().container().appendTo('#table_rating_ep_wrapper .col-md-6:eq(0)');
    });
</script>