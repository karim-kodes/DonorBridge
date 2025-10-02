const menuBtn = document.querySelector(".active");
const closeBtn = document.querySelector(".close");
const navLinks = document.querySelector(".side-links");

menuBtn.addEventListener("click", () => {
  closeBtn.style.display = "block";
  navLinks.style.display = "flex";
  menuBtn.style.display = "none";
});

closeBtn.addEventListener("click", () => {
  closeBtn.style.display = "none";
  navLinks.style.display = "none";
  menuBtn.style.display = "block";
});

const ctx = document.getElementById("donationChart").getContext("2d");
const donationChart = new Chart(ctx, {
  type: "line", // you can use 'bar' or 'pie'
  data: {
    labels: [
      "Jan",
      "Feb",
      "Mar",
      "Apr",
      "May",
      "June",
      "July",
      "Aug",
      "Sept",
      "Oct",
      "Nov",
      "Dec",
    ], // months or weeks
    datasets: [
      {
        label: "Donations ($)",
        data: [
          1200, 1900, 3000, 2500, 4000, 3000, 2000, 4000, 1500, 3500, 4000,
          2500,
        ], // example values
        borderColor: "#ff5757b5",
        backgroundColor: "#ff575725",
        fill: true,
        tension: 0.3,
      },
    ],
  },
  options: {
    responsive: true,
    plugins: {
      legend: {
        position: "top",
      },
    },
    plugins: {
      legend: {
        display: false,
      },
    },
    scales: {
      x: {
        grid: {
          display: false,
        },
        ticks: {
          color: "#545454",
        },
      },
      y: {
        grid: {
          display: false,
        },
        ticks: {
          color: "#545454",
        },
      },
    },
  },
});
