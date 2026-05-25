<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use App\Exports\InquiriesExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $query = Inquiry::query()->orderBy('created_at', 'desc');

        if ($request->has('search') && $request->search != '') {
            $query->where(function($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('company', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $inquiries = $query->get();

        $stats = [
            'total' => $query->count(),
            'pending' => (clone $query)->where('status', 'pending')->count(),
            'processing' => (clone $query)->where('status', 'processing')->count(),
            'completed' => (clone $query)->where('status', 'completed')->count(),
        ];

        return view('admin.dashboard', compact('inquiries', 'stats'));
    }

    public function updateStatus(Request $request, $id)
    {
        $inquiry = Inquiry::findOrFail($id);
        
        $request->validate([
            'status' => 'required|in:pending,processing,completed'
        ]);

        $inquiry->update(['status' => $request->status]);

        return back()->with('success', 'Status pengajuan berhasil diperbarui.');
    }

    public function export()
    {
        return Excel::download(new InquiriesExport, 'penawaran_mtn_'.date('YmdHis').'.xlsx');
    }
}
