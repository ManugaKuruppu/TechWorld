<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $vegetableCategories = array(
            "Laptops & Notebooks" => array("Ultrabooks", "Gaming laptops", "Business laptops", "2-in-1 laptops", "Chromebooks"),
            "Desktop Computers" => array("Gaming desktops", "All-in-ones", "Workstations", "Mini PCs"),
            "Computer Components" => array("Graphics cards", "Processors", "Motherboards", "RAM", "Power supplies"),
            "Peripherals" => array("Monitors", "Keyboards", "Mice", "Webcams", "Headsets"),
            "Networking" => array("Routers", "Network switches", "Wi-Fi extenders", "NAS devices", "Network adapters"),
            "Software" => array("Operating systems", "Office software", "Security software", "Design software", "Development software"),
            "Storage Devices" => array("SSDs", "HDDs", "External hard drives", "USB flash drives", "Memory cards"),
            "Gaming" => array("Gaming chairs", "Gaming desks", "VR headsets", "Game controllers", "Gaming mice"),
            "Accessories" => array("Laptop bags", "Cable management", "Docking stations", "Screen protectors", "Cleaning kits"),
            "Monitors & Displays" => array("4K monitors", "Gaming monitors", "Curved monitors", "Portable monitors", "Touchscreen monitors"),
        );
        

        foreach ($vegetableCategories as $categoryName => $vegetables) {
            Log::info($categoryName);
            $category = \App\Models\ProductCategory::create([
                'name' => $categoryName,
                'slug' => \Illuminate\Support\Str::slug($categoryName),
            ]);

            foreach ($vegetables as $vegetableName) {
                Log::info($vegetableName);
                \App\Models\ProductCategory::create([
                    'name' => $vegetableName,
                    'slug' => \Illuminate\Support\Str::slug($vegetableName),
                    'parent_id' => $category->id,
                ]);
            }
        }

    }
}
