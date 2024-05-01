<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App;
use Auth;

class ReportController extends Controller
{
    public function report1(Request $request)
    {
        // กำหนดค่า $pid จาก request ของ HTTP
        $pid = $request->pid;

        // ตรวจสอบว่า $pid มีค่าหรือไม่ ถ้าไม่มีให้คืนค่าว่าง
        $pid = $pid ?: null;

        // ตรวจสอบว่า $pid มีค่าหรือไม่ ถ้าไม่มีให้กลับไปหน้าก่อนหน้า
        if (is_null($pid)) {
            return redirect()->back()->with('error', 'Payment ID is required.');
        }

        // ค้นหาข้อมูลการชำระเงินโดยใช้ $pid จากฐานข้อมูล
        $payment = Payment::find($pid);

        // ตรวจสอบว่าพบข้อมูลการชำระเงินหรือไม่
        if (!$payment) {
            return redirect()->back()->with('error', 'Payment not found.');
        }

        // สร้าง PDF
        $payment = Payment::find($pid);
        $pdf = App::make('dompdf.wrapper');
        $print = "<div style='margin:20px; padding: 20px;'>";
        $print .= "<h1 align='center'> Payment Receipt </h1>";
        $print .= "<hr/>";
        $print .= "<p> Receipt No: <b>". $pid . "</b> </p>";
        $print .= "<p> Date : <b>" . $payment->paid_date . "</b></p>";
        $print .= "<p> Enrollment No : <b>". $payment->enrollment->enroll_no . "</b></p>";

        $print .= "<p> Student Name : <b>" . $payment->enrollment->student->name . "</b></p>";

        $print .= "<hr/>";
        $print .= "<table style='width: 100%;'>";

        $print .= "<tr>";
        $print .= "<td>Description</td>";
        $print .= "<td>Amount</td>";
        $print .= "</tr>";

        $print .= "<tr>";
        $print .= "<td> <h3>" . $payment->enrollment->batch->name . "</h3></td>"; // แก้ไขเครื่องหมายตัวเริ่มต้นจาก <tr> เป็น <td>
        $print .= "<td> <h3>" . $payment->amount . "</h3> </td>";
        $print .= "</tr>";

        $print .= "</table>";
        $print .= "<hr/>";

        $print .= "<p> Student Name : <b>" . $payment->enrollment->student->name . "</b></p>";

        $print .= "<span> Printed Date: <b>" . date('Y-m-d') . "</b> </span>";

        $print .= "</div>";
        $pdf->loadHTML($print);
        return $pdf->stream();
    }
}
