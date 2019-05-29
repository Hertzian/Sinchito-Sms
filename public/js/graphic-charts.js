new Chart(document.getElementById("mychart"), {
    type: 'bar',
    data: {
      labels: [1500],
      datasets: [{ 
          data: [2478],
          label: "Data 1",
          borderColor: "#3e95cd",
          fill: false
        }, { 
          data: [282],
          label: "Data 2",
          borderColor: "#8e5ea2",
          fill: false
        }, { 
          data: [190],
          label: "Data 3",
          borderColor: "#3cba9f",
          fill: false
        }, { 
          data: [508],
          label: "Data 4",
          borderColor: "#e8c3b9",
          fill: false
        }, { 
          data: [2312],
          label: "Data 5",
          borderColor: "#c45850",
          fill: false
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Data'
      }
    }
  });
  
