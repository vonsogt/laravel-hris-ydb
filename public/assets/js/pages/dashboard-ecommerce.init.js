/******/
(() => { // webpackBootstrap
    var __webpack_exports__ = {};
    /*!********************************************************!*\
      !*** ./resources/js/pages/dashboard-ecommerce.init.js ***!
      \********************************************************/
    /*
    Template Name: Velzon - Admin & Dashboard Template
    Author: Themesbrand
    Website: https://Themesbrand.com/
    Contact: Themesbrand@gmail.com
    File: Ecommerce Dashboard init js
    */
    // get colors array from the string
    function getChartColorsArray(chartId) {
        if (document.getElementById(chartId) !== null) {
            var colors = document.getElementById(chartId).getAttribute("data-colors");
            colors = JSON.parse(colors);
            return colors.map(function(value) {
                var newValue = value.replace(" ", "");

                if (newValue.indexOf(",") === -1) {
                    var color = getComputedStyle(document.documentElement).getPropertyValue(newValue);
                    if (color) return color;
                    else return newValue;
                } else {
                    var val = value.split(",");

                    if (val.length == 2) {
                        var rgbaColor = getComputedStyle(document.documentElement).getPropertyValue(val[0]);
                        rgbaColor = "rgba(" + rgbaColor + "," + val[1] + ")";
                        return rgbaColor;
                    } else {
                        return newValue;
                    }
                }
            });
        }
    }

    var linechartcustomerColors = getChartColorsArray("customer_impression_charts");
    var options = {
        series: [{
            name: "Pegawai",
            type: "bar",
            data: [160, 177, 186, 187, 188, 192, 194, 195, 200, 205, 208, 220]
        }],
        chart: {
            height: 370,
            type: "line",
            toolbar: {
                show: false
            }
        },
        stroke: {
            curve: "straight",
            dashArray: [0, 0, 8],
            width: [2, 0, 2.2]
        },
        fill: {
            opacity: 0.9
        },
        markers: {
            size: [0, 0, 0],
            strokeWidth: 2,
            hover: {
                size: 4
            }
        },
        xaxis: {
            categories: ["2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019", "2020", "2021", "2022"],
            axisTicks: {
                show: false
            },
            axisBorder: {
                show: false
            }
        },
        grid: {
            show: true,
            xaxis: {
                lines: {
                    show: true
                }
            },
            yaxis: {
                lines: {
                    show: false
                }
            },
            padding: {
                top: 0,
                right: -2,
                bottom: 15,
                left: 10
            }
        },
        legend: {
            show: true,
            horizontalAlign: "center",
            offsetX: 0,
            offsetY: -5,
            markers: {
                width: 9,
                height: 9,
                radius: 6
            },
            itemMargin: {
                horizontal: 10,
                vertical: 0
            }
        },
        plotOptions: {
            bar: {
                columnWidth: "30%",
                barHeight: "70%"
            }
        },
        colors: linechartcustomerColors,
        tooltip: {
            shared: true,
            y: [{
                formatter: function formatter(y) {
                    if (typeof y !== "undefined") {
                        return y.toFixed(2);
                    }

                    return y;
                }
            }]
        }
    };
    var chart = new ApexCharts(document.querySelector("#customer_impression_charts"), options);
    chart.render(); // Simple Donut Charts

    // Vertical Swiper
    var swiper = new Swiper(".vertical-swiper", {
        slidesPerView: 2,
        spaceBetween: 10,
        mousewheel: true,
        loop: true,
        direction: "vertical",
        autoplay: {
            delay: 2500,
            disableOnInteraction: false
        }
    });
    document.querySelectorAll(".layout-rightside-btn").forEach(function(item) {
        var userProfileSidebar = document.querySelector(".layout-rightside-col");
        item.addEventListener("click", function() {
            if (userProfileSidebar.classList.contains("d-block")) {
                userProfileSidebar.classList.remove("d-block");
                userProfileSidebar.classList.add("d-none");
            } else {
                userProfileSidebar.classList.remove("d-none");
                userProfileSidebar.classList.add("d-block");
            }
        });
    });
    window.addEventListener("resize", function() {
        var userProfileSidebar = document.querySelector(".layout-rightside-col");
        document.querySelectorAll(".layout-rightside-btn").forEach(function() {
            if (window.outerWidth < 1699 || window.outerWidth > 3440) {
                userProfileSidebar.classList.remove("d-block");
            } else if (window.outerWidth > 1699) {
                console.log("yesss");
                userProfileSidebar.classList.add("d-block");
            }
        });
    });
    // document.querySelector(".overlay").addEventListener("click", function () {
    //   if (document.querySelector(".layout-rightside-col").classList.contains('d-block') == true) {
    //     document.querySelector(".layout-rightside-col").classList.remove("d-block");
    //   }
    // });
    window.addEventListener("load", function() {
        var userProfileSidebar = document.querySelector(".layout-rightside-col");
        document.querySelectorAll(".layout-rightside-btn").forEach(function() {
            if (window.outerWidth < 1699 || window.outerWidth > 3440) {
                userProfileSidebar.classList.remove("d-block");
            } else if (window.outerWidth > 1699) {
                userProfileSidebar.classList.add("d-block");
            }
        });
    });
    /******/
})();