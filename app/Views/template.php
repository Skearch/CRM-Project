<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRM PROJECT</title>
    <meta name="description" content="Customer Relation Management Project">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
</head>
<body>
    <div class="navigation">
        <span class="navdesign">
            <a href="/dashboard" class="Link">Dashboard</a>

            <div class="dropdown" id="tables">
                <span class="dropdown-label">Tables</span>
                <div class="dropdown-content">
                    <a href="/customer" class="link">Customers</a>
                    <a href="/lead" class="link">Leads</a>
                    <a href="/salesperson" class="link">Salespersons</a>
                    <a href="/interaction" class="link">Interactions</a>
                    <a href="/transaction" class="link">Transactions</a>
                    <a href="/product" class="link">Products</a>
                </div>
            </div>

            <a href="/logout" class="linkLogout">Logout</a>
        </span>
    </div>

    <div class="content">
        <?= $this->renderSection('content') ?>
    </div>

    <div class="footer">
        <center>
            <span class="FooterDesign">
                <a href="" class="FooterLink">
                    &copy; Copyright Reserved
                </a>
            </span>
        </center>
    </div>
</body>
</html>