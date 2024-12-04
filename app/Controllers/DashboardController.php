<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use App\Models\SalespersonModel;
use CodeIgniter\Controller;
use App\Models\TransactionModel;
use App\Models\InteractionModel;
use App\Models\LeadModel;

class DashboardController extends Controller
{
    public function getCustomerDistribution()
    {
        $customerModel = new CustomerModel();
        $salespersonModel = new SalespersonModel();

        $customers = $customerModel->select('assigned_salesperson, COUNT(*) as count')
                                   ->groupBy('assigned_salesperson')
                                   ->findAll();

        $labels = [];
        $values = [];

        foreach ($customers as $customer) {
            $salesperson = $salespersonModel->find($customer['assigned_salesperson']);
            if ($salesperson) {
                $labels[] = $salesperson['first_name'] . ' ' . $salesperson['last_name'];
                $values[] = $customer['count'];
            }
        }

        return $this->response->setJSON([
            'labels' => $labels,
            'values' => $values
        ]);
    }

    public function getMonthlySales()
    {
        $transactionModel = new TransactionModel();

        $salesData = $transactionModel->select("DATE_FORMAT(transaction_date, '%Y-%m') as month, SUM(total_price) as total_sales, SUM(quantity) as total_quantity")
                                    ->groupBy('month')
                                    ->orderBy('month')
                                    ->findAll();

        $months = [];
        $totalSales = [];
        $totalQuantity = [];

        foreach ($salesData as $data) {
            $months[] = $data['month'];
            $totalSales[] = $data['total_sales'];
            $totalQuantity[] = $data['total_quantity'];
        }

        return $this->response->setJSON([
            'months' => $months,
            'totalSales' => $totalSales,
            'totalQuantity' => $totalQuantity
        ]);
    }

    public function getInteractionDistribution()
    {
        $interactionModel = new InteractionModel();

        $interactionData = $interactionModel->select("interaction_type, COUNT(*) as count")
                                            ->groupBy('interaction_type')
                                            ->findAll();

        $labels = [];
        $values = [];

        foreach ($interactionData as $data) {
            $labels[] = $data['interaction_type'];
            $values[] = $data['count'];
        }

        return $this->response->setJSON([
            'labels' => $labels,
            'values' => $values
        ]);
    }

    public function getLeadDistribution()
    {
        $leadModel = new LeadModel();

        $leadData = $leadModel->select("lead_source, lead_status, COUNT(*) as count")
                              ->groupBy('lead_source, lead_status')
                              ->findAll();

        $sources = [];
        $statuses = [];
        $data = [];

        foreach ($leadData as $lead) {
            $sources[$lead['lead_source']] = true;
            $statuses[$lead['lead_status']] = true;
            $data[$lead['lead_source']][$lead['lead_status']] = $lead['count'];
        }

        return $this->response->setJSON([
            'sources' => array_keys($sources),
            'statuses' => array_keys($statuses),
            'data' => $data
        ]);
    }
}