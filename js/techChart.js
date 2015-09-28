
function drawChart() {

  var svg = d3.select("svg");
svg.selectAll("*").remove();

    var data = [
  {name: "Hadoop",    value:  4},
  {name: "JAVA",    value:  3},
  {name: "J2EE",    value:  5},
  {name: "Python",     value: 3},
  {name: "Database",   value: 4},
  {name: "Bootstrap",   value: 2},
  {name: "Spring",   value: 4},
  {name: "Server",   value: 3},
  {name: "HTML", value: 2}
];      

var padding = {top: 10, right: 20, bottom: 25, left: 30},
    width = ($( window ).width())/2 ,
    height = $( window ).height()/6*2.5 ;

var x = d3.scale.ordinal()
    .domain(data.map(function(d) { return d.name; }))
    .rangeRoundBands([0, width - padding.left - padding.right], 0.1)
    ;

var y = d3.scale.linear()
    .domain([0, d3.max(data, function(d) { return d.value; })])
    .range([height - padding.top - padding.bottom, 0]);

var xAxis = d3.svg.axis()
    .scale(x)
    .orient("bottom")
    ;

var yAxis = d3.svg.axis()
    .scale(y)
    .orient("left");

var chart = d3.select(".chart")
    .attr("width", width + padding.left + padding.right)
    .attr("height", height + padding.top + padding.bottom)
    .append("g")
    ;

// Add rect
chart.selectAll(".bar")
      .data(data)
      .enter()
      .append("rect")
      .attr("class", "bar")
      .attr("x", function(d) { return x(d.name); })
      .attr("y",function(d){
          var min = y.domain()[0];
          return y(min);
      })
      .attr("height", function(d){
          return 0;
      })
      .attr("transform","translate(" + padding.left + "," + padding.top + ")")
      .attr("width", x.rangeBand())
      .transition()
      .delay(function(d,i){
          return i * 200;
      })
      .duration(2000)
      .ease("bounce")
      .attr("y", function(d) { return y(d.value); })
      .attr("height", function(d) { return height - padding.top - padding.bottom - y(d.value); });

var texts = chart.selectAll(".textInChart")
    .data(data)
    .enter()
    .append("text")
    .attr("style","font-size:20px;")
    .attr("class","textInChart")
    .attr("transform","translate(" + padding.left + "," + padding.top + ")")
    .attr("x", function(d,i){
        return x(d.name);;
    } )
    .attr("dx",function(){
        return (x.rangeBand())/2;
    })
    .attr("dy",function(d){
        return 0;
    })
    .text(function(d){
        return d.value;
    })
    .attr("y",function(d){
        var min = y.domain()[0];
        return y(min);
    })
    .transition()
    .delay(function(d,i){
        return i * 200;
    })
    .duration(2000)
    .ease("bounce")
    .attr("y",function(d){
        return y(d.value) + height*0.1 ;
    }
);
// y axis and label
chart.append("g")
    .attr("class", "y axis")
    .attr("transform","translate(" + padding.left + "," + padding.top + ")")
    .call(yAxis)

// x axis and label
var rotate = "rotate(-65)"
var dx = "-.8em"
var dy = ".15em"
if (width > 500)
{
    var rotate = "rotate(0)"
    var dx = "1.6em"
    var dy = "1.1em"
}

chart.append("g")
    .attr("class", "y axis")
    .attr("transform","translate(" + padding.left + "," + (height - padding.bottom + 5) + ")")
    .call(xAxis)
    .selectAll("text")  
    .style("text-anchor", "end")
    .attr("dx", dx)
    .attr("dy", dy)
    .attr("transform", rotate );

}





