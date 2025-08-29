import "./bootstrap";
import Chart from "chart.js/auto";

const ctx = document.getElementById("transactionsChart").getContext("2d");
const transactionsChart = new Chart(ctx, {
    type: "line",
    data: {
        labels: ["Maret", "April", "Mei", "Juni", "Juli", "Agustus"],
        datasets: [
            {
                label: "Pendapatan (Rp)",
                data: [850000, 1200000, 1100000, 1350000, 1250000, 1550000],
                backgroundColor: "rgba(79, 70, 229, 0.1)",
                borderColor: "rgba(79, 70, 229, 1)",
                borderWidth: 2,
                tension: 0.4,
            },
        ],
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
            },
        },
        responsive: true,
        plugins: {
            legend: {
                display: false,
            },
        },
    },
});
