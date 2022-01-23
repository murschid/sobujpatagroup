<script type="text/javascript">
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
        $('.successtoast').toast({delay: 5000});
        $('.successtoast').toast('show');
        $('.errorstoast').toast({delay: 5000});
        $('.errorstoast').toast('show');
        $('.textarealg').summernote({height: 350});
        $('#chatMessages').scrollTop(1e4);
    });
    
    //var messageBody = document.querySelector('#chatMessages');
    //messageBody.scrollTop = messageBody.scrollHeight - messageBody.clientHeight;

    function contactmsg(id) {
        var notific = $('.notification').text();
        $.ajax({
            url: baseurl + 'eshow/contactmsg',
            method: 'POST',
            type: 'html',
            data: {'id': id},
            success: function (result) {
                $('#contactmsg').modal('show');
                $('.contactmsg').html(result);
                $('.msghide_'+id).fadeOut();
                $('.notification').text(notific-1);
                $('.newnotification').text(notific-1);
            }
        });
    }

    setInterval(function () {
        $.ajax({
            url: baseurl + 'eshow/notification',
            method: 'POST',
            type: 'html',
            data: {'table': 'tb_contacts', 'whrfst': 'seen', 'whrlst': '0'},
            success: function (result) {
                $('.notificheight').html(result);
                $('.notification').text($('.msgcountcls').length);
                $('.notificsecond').text(($('.msgcountcls').length) + 5);
            }
        });
        $('.chatCount').text($('.contacts-listimg').length);
    }, 1500000);
    
    $('#chatmsgtxt').on('keyup', function(e){
        if (e.keyCode === 13) {
            var data = $(this).val();
            if(data != ''){
                $.ajax({
                    url: baseurl + 'action/chatmsg',
                    method: 'POST',
                    type: 'html',
                    data: {'data' : data},
                    success: function (result) {
                        console.log(result);
                        $('#chatmsgtxt').val('');
                        $('#chatreload').load(' #chatreload');
                    }
                });
            }
        }
    });
    
    function refreshstn(value) {
        $.ajax({
            url: baseurl + 'update/refresh',
            method: 'POST',
            type: 'html',
            data: {'duration': value},
            success: function (result) {
                console.log(result);
                window.location.reload();
            }
        });
    }

    function maponoff(value) {
        $.ajax({
            url: baseurl + 'update/maponoff',
            method: 'POST',
            type: 'html',
            data: {'maps': value},
            success: function (result) {
                console.log(result);
                window.location.reload();
            }
        });
    }
    
    function searchUser(user) {
        $.ajax({
            url: baseurl + 'eshow/searchuser',
            method: 'POST',
            type: 'html',
            data: {'user': user},
            success: function (result) {
                $('#ajaxdata').html(result);
            }
        });
    }
    
    /* ---- HighChart ---- */
    $(function () {
        Highcharts.chart('areaChart', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Demo European Visitors'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.y:.0f}</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: false
                }
            },
            series: [{
                    name: 'Total',
                    colorByPoint: true,
                    data: [
                        <?php foreach (general::europe() as $europe) : ?>
                            {name: '<?= $europe; ?>', y: <?= rand(100, 1000); ?>, sliced: true, selected: true},
                        <?php endforeach; ?>
                    ]
                }]
        });
    });
    var chart = Highcharts.chart('lineChart', {
        title: {
            text: 'Demo Information'
        },
        subtitle: {
            text: 'Plain'
        },
        xAxis: {
            categories: [
                <?php foreach (general::smonths() as $month) : ?>
                    '<?= $month; ?>',
                <?php endforeach; ?>
            ]
        },
        series: [{
                name: 'Information',
                type: 'column',
                colorByPoint: true,
                data: [
                    <?php for ($i = 1; $i <= 12; $i++) : ?>
                        <?= rand(500, 1000).',';?>
                    <?php endfor; ?>
                ],
                showInLegend: false
            }]
    });

    $('#plain').click(function () {
        chart.update({
            chart: {
                inverted: false,
                polar: false
            },
            subtitle: {
                text: 'Plain'
            }
        });
    });
    $('#inverted').click(function () {
        chart.update({
            chart: {
                inverted: true,
                polar: false
            },
            subtitle: {
                text: 'Inverted'
            }
        });
    });
    $('#polar').click(function () {
        chart.update({
            chart: {
                inverted: false,
                polar: true
            },
            subtitle: {
                text: 'Polar'
            }
        });
    });

</script>
