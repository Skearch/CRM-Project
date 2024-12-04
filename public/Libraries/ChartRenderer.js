class ChartRenderer {
    constructor(ctx, url, chartType, chartLabel, dataKey) {
        this.ctx = ctx;
        this.url = url;
        this.chartType = chartType;
        this.chartLabel = chartLabel;
        this.dataKey = dataKey;
    }

    async fetchData() {
        const response = await fetch(this.url);
        const data = await response.json();
        console.log(data);
        return data;
    }

    getColor(index) {
        const colors = [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(255, 159, 64, 0.6)'
        ];
        return colors[index % colors.length];
    }

    getBorderColor(index) {
        const borderColors = [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)',
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
        ];
        return borderColors[index % borderColors.length];
    }

    async render() {
        const data = await this.fetchData();

        if (data.error) {
            console.error(data.error);
            return;
        }

        const datasets = [];
        if (this.chartType === 'bar' && this.dataKey === 'data') {
            const sources = data.sources;
            const statuses = data.statuses;
            statuses.forEach((status, index) => {
                const dataset = {
                    label: status,
                    data: sources.map(source => data.data[source][status] || 0),
                    backgroundColor: this.getColor(index),
                    borderColor: this.getBorderColor(index),
                    borderWidth: 1
                };
                datasets.push(dataset);
            });
        } else {
            const backgroundColors = [];
            const borderColors = [];
            const dataLength = data.values ? data.values.length : data[this.dataKey].length;

            for (let i = 0; i < dataLength; i++) {
                backgroundColors.push(this.getColor(i));
                borderColors.push(this.getBorderColor(i));
            }

            datasets.push({
                label: this.chartLabel,
                data: data.values || data[this.dataKey],
                backgroundColor: backgroundColors,
                borderColor: borderColors,
                borderWidth: 1
            });
        }

        new Chart(this.ctx, {
            type: this.chartType,
            data: {
                labels: data.labels || data.months || data.sources,
                datasets: datasets
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: this.chartLabel
                    }
                },
                scales: {
                    x: {
                        stacked: this.chartType === 'bar' && this.dataKey === 'data',
                    },
                    y: {
                        stacked: this.chartType === 'bar' && this.dataKey === 'data',
                    }
                }
            }
        });
    }
}