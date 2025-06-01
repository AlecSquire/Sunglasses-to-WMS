# Sunglasses Case Study – PHP Integration Task
Please forgive me seprating files into folders.
It felt so strange to have everything in one file.
Below is how each question is implemented.
src/
└── SunglassesCaseStudy/
├── Collections/
│ └── OrderList.php # Q5
├── Contracts/
│ └── GetTitle.php # Q4
├── Models/
│ ├── Address.php # Q1
│ ├── BaseOrder.php # Q3
│ ├── LineItem.php # Q1
│ ├── Order.php # Q1
│ └── PurchaseOrder.php # Q3
├── Utils/
│ └── ParseOrder.php # Q2
└── index.php # Main runner (loads all)

Only set PHPstan to level 6 as i felt it was appropriate. 