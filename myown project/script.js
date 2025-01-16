// Handle Dark/Light Mode Toggle
document.getElementById('themeToggle')?.addEventListener('change', (event) => {
    document.body.className = event.target.value;
  });
  
  // Initialize Chart.js for Analytics
  const ctx = document.getElementById('lineChart')?.getContext('2d');
  if (ctx) {
    new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        datasets: [
          {
            label: 'Task Progress',
            data: [12, 19, 3, 5, 2, 3, 7],
            borderColor: 'rgba(75, 192, 192, 1)',
            tension: 0.1,
          },
        ],
      },
    });
  }
  