<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\kelas_penerbangan;

class KelasPenerbanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas_penerbangan = [
            [
                'penerbangan_id' => 3,
                'tipe_kelas' => 1,
                'harga' => 1000000,
                'jumlah_kursi' => 40,
                'seat_layout' =>
                '{
                    "rows": [
                      {
                        "row_number": "1",
                        "seats": [
                          { "seat_number": "1A", "available": true },
                          { "seat_number": "1B", "available": true },
                          { "seat_number": "1C", "available": true },
                          { "seat_number": "1D", "available": true }
                        ]
                      },
                      {
                        "row_number": "2",
                        "seats": [
                          { "seat_number": "2A", "available": true },
                          { "seat_number": "2B", "available": true },
                          { "seat_number": "2C", "available": true },
                          { "seat_number": "2D", "available": true }
                        ]
                      },
                      {
                        "row_number": "3",
                        "seats": [
                          { "seat_number": "3A", "available": true },
                          { "seat_number": "3B", "available": true },
                          { "seat_number": "3C", "available": true },
                          { "seat_number": "3D", "available": true }
                        ]
                      },
                      {
                        "row_number": "4",
                        "seats": [
                          { "seat_number": "4A", "available": true },
                          { "seat_number": "4B", "available": true },
                          { "seat_number": "4C", "available": true },
                          { "seat_number": "4D", "available": true }
                        ]
                      },
                      {
                        "row_number": "5",
                        "seats": [
                          { "seat_number": "5A", "available": true },
                          { "seat_number": "5B", "available": true },
                          { "seat_number": "5C", "available": true },
                          { "seat_number": "5D", "available": true }
                        ]
                      },
                      {
                        "row_number": "6",
                        "seats": [
                          { "seat_number": "6A", "available": true },
                          { "seat_number": "6B", "available": true },
                          { "seat_number": "6C", "available": true },
                          { "seat_number": "6D", "available": true }
                        ]
                      },
                      {
                        "row_number": "7",
                        "seats": [
                          { "seat_number": "7A", "available": true },
                          { "seat_number": "7B", "available": true },
                          { "seat_number": "7C", "available": true },
                          { "seat_number": "7D", "available": true }
                        ]
                      },
                      {
                        "row_number": "8",
                        "seats": [
                          { "seat_number": "8A", "available": true },
                          { "seat_number": "8B", "available": true },
                          { "seat_number": "8C", "available": true },
                          { "seat_number": "8D", "available": true }
                        ]
                      },
                      {
                        "row_number": "9",
                        "seats": [
                          { "seat_number": "9A", "available": true },
                          { "seat_number": "9B", "available": true },
                          { "seat_number": "9C", "available": true },
                          { "seat_number": "9D", "available": true }
                        ]
                      },
                      {
                        "row_number": "10",
                        "seats": [
                          { "seat_number": "10A", "available": true },
                          { "seat_number": "10B", "available": true },
                          { "seat_number": "10C", "available": true },
                          { "seat_number": "10D", "available": true }
                        ]
                      },
                      {
                        "row_number": "11",
                        "seats": [
                          { "seat_number": "11A", "available": true },
                          { "seat_number": "11B", "available": true },
                          { "seat_number": "11C", "available": true },
                          { "seat_number": "11D", "available": true }
                        ]
                      },
                      {
                        "row_number": "12",
                        "seats": [
                          { "seat_number": "12A", "available": true },
                          { "seat_number": "12B", "available": true },
                          { "seat_number": "12C", "available": true },
                          { "seat_number": "12D", "available": true }
                        ]
                      },
                      {
                        "row_number": "13",
                        "seats": [
                          { "seat_number": "13A", "available": true },
                          { "seat_number": "13B", "available": true },
                          { "seat_number": "13C", "available": true },
                          { "seat_number": "13D", "available": true }
                        ]
                      },
                      {
                        "row_number": "14",
                        "seats": [
                          { "seat_number": "14A", "available": true },
                          { "seat_number": "14B", "available": true },
                          { "seat_number": "14C", "available": true },
                          { "seat_number": "14D", "available": true }
                        ]
                      },
                      {
                        "row_number": "15",
                        "seats": [
                          { "seat_number": "15A", "available": true },
                          { "seat_number": "15B", "available": true },
                          { "seat_number": "15C", "available": true },
                          { "seat_number": "15D", "available": true }
                        ]
                      },
                      {
                        "row_number": "16",
                        "seats": [
                          { "seat_number": "16A", "available": true },
                          { "seat_number": "16B", "available": true },
                          { "seat_number": "16C", "available": true },
                          { "seat_number": "16D", "available": true }
                        ]
                      },
                      {
                        "row_number": "17",
                        "seats": [
                          { "seat_number": "17A", "available": true },
                          { "seat_number": "17B", "available": true },
                          { "seat_number": "17C", "available": true },
                          { "seat_number": "17D", "available": true }
                        ]
                      },
                      {
                        "row_number": "18",
                        "seats": [
                          { "seat_number": "18A", "available": true },
                          { "seat_number": "18B", "available": true },
                          { "seat_number": "18C", "available": true },
                          { "seat_number": "18D", "available": true }
                        ]
                      },
                      {
                        "row_number": "19",
                        "seats": [
                          { "seat_number": "19A", "available": true },
                          { "seat_number": "19B", "available": true },
                          { "seat_number": "19C", "available": true },
                          { "seat_number": "19D", "available": true }
                        ]
                      },
                      {
                        "row_number": "20",
                        "seats": [
                          { "seat_number": "20A", "available": true },
                          { "seat_number": "20B", "available": true },
                          { "seat_number": "20C", "available": true },
                          { "seat_number": "20D", "available": true }
                        ]
                      }
                    ],
                    "max_columns_on_aisle": 2
                  }
                  ',
            ],
            [
                'penerbangan_id' => 4,
                'tipe_kelas' => 1,
                'harga' => 850000,
                'jumlah_kursi' => 40,
                'seat_layout' =>
                '{
                    "rows": [
                      {
                        "row_number": "1",
                        "seats": [
                          { "seat_number": "1A", "available": true },
                          { "seat_number": "1B", "available": true },
                          { "seat_number": "1C", "available": true },
                          { "seat_number": "1D", "available": true }
                        ]
                      },
                      {
                        "row_number": "2",
                        "seats": [
                          { "seat_number": "2A", "available": true },
                          { "seat_number": "2B", "available": true },
                          { "seat_number": "2C", "available": true },
                          { "seat_number": "2D", "available": true }
                        ]
                      },
                      {
                        "row_number": "3",
                        "seats": [
                          { "seat_number": "3A", "available": true },
                          { "seat_number": "3B", "available": true },
                          { "seat_number": "3C", "available": true },
                          { "seat_number": "3D", "available": true }
                        ]
                      },
                      {
                        "row_number": "4",
                        "seats": [
                          { "seat_number": "4A", "available": true },
                          { "seat_number": "4B", "available": true },
                          { "seat_number": "4C", "available": true },
                          { "seat_number": "4D", "available": true }
                        ]
                      },
                      {
                        "row_number": "5",
                        "seats": [
                          { "seat_number": "5A", "available": true },
                          { "seat_number": "5B", "available": true },
                          { "seat_number": "5C", "available": true },
                          { "seat_number": "5D", "available": true }
                        ]
                      },
                      {
                        "row_number": "6",
                        "seats": [
                          { "seat_number": "6A", "available": true },
                          { "seat_number": "6B", "available": true },
                          { "seat_number": "6C", "available": true },
                          { "seat_number": "6D", "available": true }
                        ]
                      },
                      {
                        "row_number": "7",
                        "seats": [
                          { "seat_number": "7A", "available": true },
                          { "seat_number": "7B", "available": true },
                          { "seat_number": "7C", "available": true },
                          { "seat_number": "7D", "available": true }
                        ]
                      },
                      {
                        "row_number": "8",
                        "seats": [
                          { "seat_number": "8A", "available": true },
                          { "seat_number": "8B", "available": true },
                          { "seat_number": "8C", "available": true },
                          { "seat_number": "8D", "available": true }
                        ]
                      },
                      {
                        "row_number": "9",
                        "seats": [
                          { "seat_number": "9A", "available": true },
                          { "seat_number": "9B", "available": true },
                          { "seat_number": "9C", "available": true },
                          { "seat_number": "9D", "available": true }
                        ]
                      },
                      {
                        "row_number": "10",
                        "seats": [
                          { "seat_number": "10A", "available": true },
                          { "seat_number": "10B", "available": true },
                          { "seat_number": "10C", "available": true },
                          { "seat_number": "10D", "available": true }
                        ]
                      },
                      {
                        "row_number": "11",
                        "seats": [
                          { "seat_number": "11A", "available": true },
                          { "seat_number": "11B", "available": true },
                          { "seat_number": "11C", "available": true },
                          { "seat_number": "11D", "available": true }
                        ]
                      },
                      {
                        "row_number": "12",
                        "seats": [
                          { "seat_number": "12A", "available": true },
                          { "seat_number": "12B", "available": true },
                          { "seat_number": "12C", "available": true },
                          { "seat_number": "12D", "available": true }
                        ]
                      },
                      {
                        "row_number": "13",
                        "seats": [
                          { "seat_number": "13A", "available": true },
                          { "seat_number": "13B", "available": true },
                          { "seat_number": "13C", "available": true },
                          { "seat_number": "13D", "available": true }
                        ]
                      },
                      {
                        "row_number": "14",
                        "seats": [
                          { "seat_number": "14A", "available": true },
                          { "seat_number": "14B", "available": true },
                          { "seat_number": "14C", "available": true },
                          { "seat_number": "14D", "available": true }
                        ]
                      },
                      {
                        "row_number": "15",
                        "seats": [
                          { "seat_number": "15A", "available": true },
                          { "seat_number": "15B", "available": true },
                          { "seat_number": "15C", "available": true },
                          { "seat_number": "15D", "available": true }
                        ]
                      },
                      {
                        "row_number": "16",
                        "seats": [
                          { "seat_number": "16A", "available": true },
                          { "seat_number": "16B", "available": true },
                          { "seat_number": "16C", "available": true },
                          { "seat_number": "16D", "available": true }
                        ]
                      },
                      {
                        "row_number": "17",
                        "seats": [
                          { "seat_number": "17A", "available": true },
                          { "seat_number": "17B", "available": true },
                          { "seat_number": "17C", "available": true },
                          { "seat_number": "17D", "available": true }
                        ]
                      },
                      {
                        "row_number": "18",
                        "seats": [
                          { "seat_number": "18A", "available": true },
                          { "seat_number": "18B", "available": true },
                          { "seat_number": "18C", "available": true },
                          { "seat_number": "18D", "available": true }
                        ]
                      },
                      {
                        "row_number": "19",
                        "seats": [
                          { "seat_number": "19A", "available": true },
                          { "seat_number": "19B", "available": true },
                          { "seat_number": "19C", "available": true },
                          { "seat_number": "19D", "available": true }
                        ]
                      },
                      {
                        "row_number": "20",
                        "seats": [
                          { "seat_number": "20A", "available": true },
                          { "seat_number": "20B", "available": true },
                          { "seat_number": "20C", "available": true },
                          { "seat_number": "20D", "available": true }
                        ]
                      }
                    ],
                    "max_columns_on_aisle": 2
                  }
                  ',
            ],
            [
                'penerbangan_id' => 5,
                'tipe_kelas' => 1,
                'harga' => 740000,
                'jumlah_kursi' => 40,
                'seat_layout' =>
                '{
                    "rows": [
                      {
                        "row_number": "1",
                        "seats": [
                          { "seat_number": "1A", "available": true },
                          { "seat_number": "1B", "available": true },
                          { "seat_number": "1C", "available": true },
                          { "seat_number": "1D", "available": true }
                        ]
                      },
                      {
                        "row_number": "2",
                        "seats": [
                          { "seat_number": "2A", "available": true },
                          { "seat_number": "2B", "available": true },
                          { "seat_number": "2C", "available": true },
                          { "seat_number": "2D", "available": true }
                        ]
                      },
                      {
                        "row_number": "3",
                        "seats": [
                          { "seat_number": "3A", "available": true },
                          { "seat_number": "3B", "available": true },
                          { "seat_number": "3C", "available": true },
                          { "seat_number": "3D", "available": true }
                        ]
                      },
                      {
                        "row_number": "4",
                        "seats": [
                          { "seat_number": "4A", "available": true },
                          { "seat_number": "4B", "available": true },
                          { "seat_number": "4C", "available": true },
                          { "seat_number": "4D", "available": true }
                        ]
                      },
                      {
                        "row_number": "5",
                        "seats": [
                          { "seat_number": "5A", "available": true },
                          { "seat_number": "5B", "available": true },
                          { "seat_number": "5C", "available": true },
                          { "seat_number": "5D", "available": true }
                        ]
                      },
                      {
                        "row_number": "6",
                        "seats": [
                          { "seat_number": "6A", "available": true },
                          { "seat_number": "6B", "available": true },
                          { "seat_number": "6C", "available": true },
                          { "seat_number": "6D", "available": true }
                        ]
                      },
                      {
                        "row_number": "7",
                        "seats": [
                          { "seat_number": "7A", "available": true },
                          { "seat_number": "7B", "available": true },
                          { "seat_number": "7C", "available": true },
                          { "seat_number": "7D", "available": true }
                        ]
                      },
                      {
                        "row_number": "8",
                        "seats": [
                          { "seat_number": "8A", "available": true },
                          { "seat_number": "8B", "available": true },
                          { "seat_number": "8C", "available": true },
                          { "seat_number": "8D", "available": true }
                        ]
                      },
                      {
                        "row_number": "9",
                        "seats": [
                          { "seat_number": "9A", "available": true },
                          { "seat_number": "9B", "available": true },
                          { "seat_number": "9C", "available": true },
                          { "seat_number": "9D", "available": true }
                        ]
                      },
                      {
                        "row_number": "10",
                        "seats": [
                          { "seat_number": "10A", "available": true },
                          { "seat_number": "10B", "available": true },
                          { "seat_number": "10C", "available": true },
                          { "seat_number": "10D", "available": true }
                        ]
                      },
                      {
                        "row_number": "11",
                        "seats": [
                          { "seat_number": "11A", "available": true },
                          { "seat_number": "11B", "available": true },
                          { "seat_number": "11C", "available": true },
                          { "seat_number": "11D", "available": true }
                        ]
                      },
                      {
                        "row_number": "12",
                        "seats": [
                          { "seat_number": "12A", "available": true },
                          { "seat_number": "12B", "available": true },
                          { "seat_number": "12C", "available": true },
                          { "seat_number": "12D", "available": true }
                        ]
                      },
                      {
                        "row_number": "13",
                        "seats": [
                          { "seat_number": "13A", "available": true },
                          { "seat_number": "13B", "available": true },
                          { "seat_number": "13C", "available": true },
                          { "seat_number": "13D", "available": true }
                        ]
                      },
                      {
                        "row_number": "14",
                        "seats": [
                          { "seat_number": "14A", "available": true },
                          { "seat_number": "14B", "available": true },
                          { "seat_number": "14C", "available": true },
                          { "seat_number": "14D", "available": true }
                        ]
                      },
                      {
                        "row_number": "15",
                        "seats": [
                          { "seat_number": "15A", "available": true },
                          { "seat_number": "15B", "available": true },
                          { "seat_number": "15C", "available": true },
                          { "seat_number": "15D", "available": true }
                        ]
                      },
                      {
                        "row_number": "16",
                        "seats": [
                          { "seat_number": "16A", "available": true },
                          { "seat_number": "16B", "available": true },
                          { "seat_number": "16C", "available": true },
                          { "seat_number": "16D", "available": true }
                        ]
                      },
                      {
                        "row_number": "17",
                        "seats": [
                          { "seat_number": "17A", "available": true },
                          { "seat_number": "17B", "available": true },
                          { "seat_number": "17C", "available": true },
                          { "seat_number": "17D", "available": true }
                        ]
                      },
                      {
                        "row_number": "18",
                        "seats": [
                          { "seat_number": "18A", "available": true },
                          { "seat_number": "18B", "available": true },
                          { "seat_number": "18C", "available": true },
                          { "seat_number": "18D", "available": true }
                        ]
                      },
                      {
                        "row_number": "19",
                        "seats": [
                          { "seat_number": "19A", "available": true },
                          { "seat_number": "19B", "available": true },
                          { "seat_number": "19C", "available": true },
                          { "seat_number": "19D", "available": true }
                        ]
                      },
                      {
                        "row_number": "20",
                        "seats": [
                          { "seat_number": "20A", "available": true },
                          { "seat_number": "20B", "available": true },
                          { "seat_number": "20C", "available": true },
                          { "seat_number": "20D", "available": true }
                        ]
                      }
                    ],
                    "max_columns_on_aisle": 2
                  }
                  ',
            ]
        ];
        foreach ($kelas_penerbangan as $d) {
            kelas_penerbangan::create($d);
        }
    }
}
