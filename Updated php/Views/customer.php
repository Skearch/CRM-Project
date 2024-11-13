<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main Page</title>
    <meta name="description" content="Customer Relation Management Prject">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <style>
        body{
            background-color: #ffffff;
            background-size: 100% 100%;
            font-family: verdana, arial, Arial, Helvetica, sans-serif;
            }
        .container{
            padding: auto;
            margin: 0;
            width: 100%;
        }
        .navdesign{
            margin-right: 20px;
            margin-top: 25px;
            font-size: 20px;
            font-family: 'Times New Roman', Times, serif;
            color: #ffffff;
            display: inline-block;
        }
        .FooterDesign{
            margin-top: 17px;
            font-size: 15px;
            font-family: 'Times New Roman', Times, serif;
            display: inline-block;
        }
        .navigation{
            padding: auto;
            margin: 0;
            margin-bottom: 29px;
            width: 100%;
            height: 75px;
            background-color: #000000;
            text-align: center;
            object-fit: cover;
        }
        .footer{
            padding: auto;
            margin: 0;
            margin-top: 29px;
            width: 100%;
            height: 55px;
            background-color: #000000;
            text-align: center;
        }
        .Link{
            text-decoration: none;
            font-size: 20px;
            margin-right: 5px;
            color: #cc2b6b;
        }
        .FooterLink{
            text-decoration: none;
            color: #cc2b6b;
        }
        .textcontainer{
            color: #ffffff;
            font-size: 15px;
            font-family: 'Times New Roman', Times, serif;
            margin-right: 6px;
            margin-left: 6px;
            text-align: justify;
        }
        .Image{
            width: 60px;
            height: 60px;
        }
        h1{
            margin-top: 20px;
            margin-right: 20px;
            font-size: 30px;
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="navigation">
            <span class="navdesign">
                <a href="http://localhost:8080/" class="Link">
                    Home
                </a>
            </span>
            <span class="navdesign">
                <a href="/customer" class="Link">
                    Customers
                </a>
            </span>
            <span class="navdesign">
                <a href="" class="Link">
                    Leads
                </a>
            </span>
            <span class="navdesign">
                <a href="" class="Link">
                    Salespersons
                </a>
            </span>
            <span class="navdesign">
                <a href="" class="Link">
                    Interactions
                </a>
            </span>
            <span class="navdesign">
                <a href="" class="Link">
                    Transactions
                </a>
            </span>
        </div>
        <center>
            <h1>CUSTOMERS MODULE</h1>
                <a href='#'>Add New Product</a>
        <table border="1">
            <tr>
                <th>Customer ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Registration Date</th>
                <th>Assigned Salespersons</th>
                <th>Actions</th>
            </tr>
            <?php foreach($customers as $c): ?>
    <tr>
            <th><?=$c['customerid']?></th>
            <th><?=$c['first_name']?></th>
            <th><?=$c['last_name']?></th>
            <th><?=$c['email']?></th>
            <th><?=$c['phone']?></th>
            <th><?=$c['address']?></th>
            <th><?=$c['registration_date']?></th>
            <th><?=$c['assigned_salesperson']?></th>
            <th>
                <a href="/editproduct/<?=$c['customerid']?>">EDIT</a>
                <a href="/deleteproduct/<?=$c['customerid']?>">DELETE</a>
            </th>
        </tr>
<?php endforeach; ?>  
        </table>
        </center>
        <div class="footer">
            <center>
            <span class="FooterDesign">
                <a href="" class="FooterLink">
                    @Copyright Reserved
                </a>
            </span>
            </center>
        </div>
    </div>
</body>
</html>