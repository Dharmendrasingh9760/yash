<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Models\HouseWaterTax; // Your Model for the table
use App\Models\Property;
use Illuminate\Support\Facades\DB;

class ExcelImportController extends Controller
{

    public function importExcelPage(){
        return view('excel_upload');
    }


    public function importExcel(Request $request)
    {
        // Validate the request to ensure an Excel file is uploaded
        $request->validate([
            'excel_file' => 'required|mimes:xlsx,xls',
        ]);

        // Load the uploaded Excel file
        $filePath = $request->file('excel_file')->getRealPath();
        $spreadsheet = IOFactory::load($filePath);
        $sheet = $spreadsheet->getActiveSheet();
        $startRow = 6;
        $highestRow = $sheet->getHighestRow();

        // Start a database transaction to ensure data integrity
        DB::beginTransaction();
        try {
            // Loop through each row and insert data into the table
            for ($row = $startRow; $row <= 269; $row++) {
                $data = [
                    'property_id' => $this->generatePropertyId(),
                    'property' => $sheet->getCell('E' . $row)->getCalculatedValue(),
                    'ward_no' => $sheet->getCell('C' . $row)->getCalculatedValue(),
                    'colony_name' => $sheet->getCell('D' . $row)->getCalculatedValue(),
                    'building_type' => $sheet->getCell('E' . $row)->getCalculatedValue(),
                    'house_no' => $sheet->getCell('F' . $row)->getCalculatedValue(),
                    'property_owner_name' => $sheet->getCell('G' . $row)->getCalculatedValue(),
                    'father_or_husband_name' => $sheet->getCell('H' . $row)->getCalculatedValue(),
                    'mobile_number' => $sheet->getCell('I' . $row)->getCalculatedValue(),
                    'total_arv' => $sheet->getCell('J' . $row)->getCalculatedValue(),
                    'house_tax_current' => $sheet->getCell('K' . $row)->getCalculatedValue(),
                    'house_tax_arrear' => $sheet->getCell('L' . $row)->getCalculatedValue(),
                    'surcharge' => $sheet->getCell('M' . $row)->getCalculatedValue(),
                    'total_tax_house' => $sheet->getCell('N' . $row)->getCalculatedValue(),
                    'water_tax_current' => $sheet->getCell('O' . $row)->getCalculatedValue(),
                    'water_tax_arrear' => $sheet->getCell('P' . $row)->getCalculatedValue(),
                    'water_tax_surcharge' => $sheet->getCell('Q' . $row)->getCalculatedValue(),
                    'total_water_tax' => $sheet->getCell('R' . $row)->getCalculatedValue(),
                    'water_charge_current' => $sheet->getCell('S' . $row)->getCalculatedValue(),
                    'water_charge_arrear' => $sheet->getCell('T' . $row)->getCalculatedValue(),
                    'water_charge_surcharge' => $sheet->getCell('U' . $row)->getCalculatedValue(),
                    'total_water_charge' => $sheet->getCell('V' . $row)->getCalculatedValue(),
                    'total_property_tax' => $sheet->getCell('W' . $row)->getCalculatedValue(),
                    'deposite_house_tax' => $sheet->getCell('X' . $row)->getCalculatedValue(),
                    'deposite_water_tax' => $sheet->getCell('Y' . $row)->getCalculatedValue(),
                    'deposite_water_charges' => $sheet->getCell('Z' . $row)->getCalculatedValue(),
                    'remarks' => $sheet->getCell('AA' . $row)->getCalculatedValue(),
                ];

                // Insert data into the table
                Property::create($data);
            }

            // Commit transaction after successful insertion
            DB::commit();
            return response()->json(['message' => 'Data imported successfully!']);
        } catch (\Exception $e) {
            // Rollback transaction on error
            DB::rollBack();
            return response()->json(['error' => 'Error importing data: ' . $e->getMessage()], 500);
        }
    }

    private function generatePropertyId()
    {
        return strtoupper(substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 7));
    }
}
