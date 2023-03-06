@php
    
    $s = \App\Models\Standard::all();
    
@endphp
<x-app>

    <x-slot:title>Dashboard</x-slot:title>

    <x-slot:styles>

        <style>
            .flex-column {
                display: flex;
                flex-direction: column;
                gap: 50px;
            }
        </style>

    </x-slot:styles>

    <div class="d-flex flex-column justify-content-center align-items-center">

        <canvas id="1" class="w-50 h-50"></canvas>

        <canvas id="2" class="w-50 h-50"></canvas>

        <canvas id="3" class="w-50 h-50"></canvas>

        <canvas id="4" class="w-50 h-50"></canvas>

        <canvas id="5" class="w-50 h-50"></canvas>

        <canvas id="6" class="w-50 h-50"></canvas>

        <canvas id="7" class="w-50 h-50"></canvas>

    </div>

    <x-slot:scripts>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            const data1 = {
                datasets: [{
                    data: [{{ $s[0]->percentage }}, {{ 100 - $s[0]->percentage }}],
                    backgroundColor: [
                        'rgb(230, 0, 0)',
                        'rgb(255,120,120)',
                    ],
                    hoverOffset: 4
                }]
            };

            const data2 = {
                datasets: [{
                    data: [{{ $s[1]->percentage }}, {{ 100 - $s[1]->percentage }}],
                    backgroundColor: [
                        'rgb(230, 0, 0)',
                        'rgb(255,120,120)',
                    ],
                    hoverOffset: 4
                }]
            };

            const data3 = {
                datasets: [{
                    data: [{{ $s[2]->percentage }}, {{ 100 - $s[2]->percentage }}],
                    backgroundColor: [
                        'rgb(230, 0, 0)',
                        'rgb(255,120,120)',
                    ],
                    hoverOffset: 4
                }]
            };

            const data4 = {
                datasets: [{
                    data: [{{ $s[3]->percentage }}, {{ 100 - $s[3]->percentage }}],
                    backgroundColor: [
                        'rgb(230, 0, 0)',
                        'rgb(255,120,120)',
                    ],
                    hoverOffset: 4
                }]
            };

            const data5 = {
                datasets: [{
                    data: [{{ $s[4]->percentage }}, {{ 100 - $s[4]->percentage }}],
                    backgroundColor: [
                        'rgb(230, 0, 0)',
                        'rgb(255,120,120)',
                    ],
                    hoverOffset: 4
                }]
            };

            const data6 = {
                datasets: [{
                    data: [{{ $s[5]->percentage }}, {{ 100 - $s[5]->percentage }}],
                    backgroundColor: [
                        'rgb(230, 0, 0)',
                        'rgb(255,120,120)',
                    ],
                    hoverOffset: 4
                }]
            };

            const data7 = {
                datasets: [{
                    data: [{{ $s[6]->percentage }}, {{ 100 - $s[6]->percentage }}],
                    backgroundColor: [
                        'rgb(230, 0, 0)',
                        'rgb(255,120,120)',
                    ],
                    hoverOffset: 4
                }]
            };

            new Chart(
                document.getElementById('1'), {
                    type: 'doughnut',
                    data: data1,
                    options: {
                        plugins: {
                            title: {
                                display: true,
                                text: 'التوجهات الوطنية والقطاعية',
                                position: 'bottom',
                                font: {
                                    size: 50,
                                    weight: 'bold',
                                    family: 'Arial',
                                    color: 'rgb(0, 0, 0)'
                                }
                            }
                        }
                    }
                }
            );

            new Chart(
                document.getElementById('2'), {
                    type: 'doughnut',
                    data: data2,
                    options: {
                        plugins: {
                            title: {
                                display: true,
                                text: 'الدور القيادي',
                                position: 'bottom',
                                font: {
                                    size: 50,
                                    weight: 'bold',
                                    family: 'Arial',
                                    color: 'rgb(0, 0, 0)'
                                }
                            }
                        }
                    }
                }
            );

            new Chart(
                document.getElementById('3'), {
                    type: 'doughnut',
                    data: data3,
                    options: {
                        plugins: {
                            title: {
                                display: true,
                                text: 'الاستراتيجية المؤسسية',
                                position: 'bottom',
                                font: {
                                    size: 50,
                                    weight: 'bold',
                                    family: 'Arial',
                                    color: 'rgb(0, 0, 0)'
                                }
                            }
                        }
                    }
                }
            );

            new Chart(
                document.getElementById('4'), {
                    type: 'doughnut',
                    data: data4,
                    options: {
                        plugins: {
                            title: {
                                display: true,
                                text: 'ادارة الموارد الحكومية',
                                position: 'bottom',
                                font: {
                                    size: 50,
                                    weight: 'bold',
                                    family: 'Arial',
                                    color: 'rgb(0, 0, 0)'
                                }
                            }
                        }
                    }
                }
            );

            new Chart(
                document.getElementById('5'), {
                    type: 'doughnut',
                    data: data5,
                    options: {
                        plugins: {
                            title: {
                                display: true,
                                text: 'المهام الحكومية',
                                position: 'bottom',
                                font: {
                                    size: 50,
                                    weight: 'bold',
                                    family: 'Arial',
                                    color: 'rgb(0, 0, 0)'
                                }
                            }
                        }
                    }
                }
            );

            new Chart(
                document.getElementById('6'), {
                    type: 'doughnut',
                    data: data6,
                    options: {
                        plugins: {
                            title: {
                                display: true,
                                text: 'التحول الرقمي',
                                position: 'bottom',
                                font: {
                                    size: 50,
                                    weight: 'bold',
                                    family: 'Arial',
                                    color: 'rgb(0, 0, 0)'
                                }
                            }
                        }
                    }
                }
            );

            new Chart(
                document.getElementById('7'), {
                    type: 'doughnut',
                    data: data7,
                    options: {
                        plugins: {
                            title: {
                                display: true,
                                text: 'التحسين و التطوير',
                                position: 'bottom',
                                font: {
                                    size: 50,
                                    weight: 'bold',
                                    family: 'Arial',
                                    color: 'rgb(0, 0, 0)'
                                }
                            }
                        }
                    }
                }
            );
        </script>

    </x-slot:scripts>

</x-app>
