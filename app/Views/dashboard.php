<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<body>
    <br><br><br><br><br><br><br><br>

    <div class="table-container" id="tableContainer">
        <div class="table-card">
            <h3>CUSTOMERS</h3>
            <p>A customer is an individual or organization that purchases goods or services from a business in
                exchange for value,
                typically money. They are essential to businesses as they drive demand and contribute to revenue
                growth.</p>
        </div>

        <div class="table-card">
            <h3>LEADS</h3>
            <p>A lead is a potential customer or client who has expressed interest in a company’s products or
                services, often through specific actions,
                representing an opportunity for sales teams to convert them into paying customers.</p>
        </div>

        <div class="table-card">
            <h3>SALESPERSONS</h3>
            <p>A salesperson is an individual who actively promotes and sells products or services to customers,
                utilizing their communication skills, product knowledge,
                and persuasion techniques to meet customer needs and drive business growth through successful
                transactions.</p>
        </div>

        <div class="table-card">
            <h3>INTERACTIONS</h3>
            <p>Interaction is the process of communication or engagement between two or more parties, where ideas,
                information, or emotions are exchanged, fostering understanding,
                collaboration, or mutual benefits in various personal, professional, or social contexts.</p>
        </div>
    </div>

    <br><br><br><br><br><br>

    <div class="table-container" id="tableContainer">
        <div class="table-card">
            <canvas id="customerChart"></canvas>
        </div>

        <div class="table-card">
            <canvas id="salesChart"></canvas>
        </div>

        <div class="table-card">
            <canvas id="interactionChart"></canvas>
        </div>

        <div class="table-card">
            <canvas id="leadChart"></canvas>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="/Libraries/ChartRenderer.js"></script>
    <script>
    const customerChart = new ChartRenderer(
        document.getElementById('customerChart').getContext('2d'),
        '/dashboard/getCustomerDistribution',
        'doughnut',
        'Customer Distribution Among Salespersons',
        'values'
    );
    customerChart.render();

    const salesChart = new ChartRenderer(
        document.getElementById('salesChart').getContext('2d'),
        '/dashboard/getMonthlySales',
        'bar',
        'Monthly Sales Performance',
        'totalSales'
    );
    salesChart.render();

    const interactionChart = new ChartRenderer(
        document.getElementById('interactionChart').getContext('2d'),
        '/dashboard/getInteractionDistribution',
        'doughnut',
        'Interaction Type Distribution',
        'values'
    );
    interactionChart.render();

    const leadChart = new ChartRenderer(
        document.getElementById('leadChart').getContext('2d'),
        '/dashboard/getLeadDistribution',
        'bar',
        'Lead Distribution by Source and Status',
        'data'
    );
    leadChart.render();
    </script>
</body>

<?= $this->endSection() ?>