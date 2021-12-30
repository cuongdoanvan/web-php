
    
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Bảng', 'Lợi nhuận','Doanh thu'],
          ['Việt Nam', 8000000,23000000],
          ['Lào', 200000,2000000],
          ['Anh', 10000000,40000000],
          ['Trung Quốc', 15000000,70000000],
          ['Mã Lai', 6000000,17000000],
		      ['Mỹ',20000000,90000000]
		
		  
        ]);

      var options = {
          chart: {
            title: 'Doanh nghiệp',
            subtitle: 'Kết quả kinh doanh năm vừa rồi'
          },
          bars: 'horizontal', // Required for Material Bar Charts.
          hAxis: {format: 'decimal'},
          height: 400,
		  width : 600,
          colors: ['#00CD00', '#473C8B']
        };

      var chart = new google.charts.Bar(document.getElementById('dual_x_div'));
      chart.draw(data, options);
    };
     google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
	   function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Việt Nam',11],
          ['Lào',   6],
          ['Mã lai',5],
          ['Anh', 4],
          ['Trung quốc',7],
		   ['Mỹ',3]
        ]);

        var options = {
          title: 'Thị Phần Giao Dịch Trái Phiếu 2020',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
	  
	 