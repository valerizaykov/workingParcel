# WorkingParcel yii 2.0 framework project
#### Working parcel is a mini project which is written via GII - a design tool provided by yii 2.0 which can generate 
#### CRUD operations the project itself has the following implemented:
1. We can create parcels which has "name", "culture" - which we grow on it and a "total area" in square meters.
2. We can add tractor which can work on the total area.
3. We can create/edit/delete worked parcel which is the area from a choosen parcel that is being worked by a tractor 
and the worked area cannot exceed the total are of the parcel. 
4. We have filters for parcel name, culture, date worked, tractor name.
# Used Technologies
- Yii 2.0
- yii\jui\DatePicker
- MySQL
- HTML, CSS, JS

# Installation 
* We need xampp with php version 7.0
* After cloning the repo search for SQL file in \workingParcel\workingParcel\SQL_import\minprj.sql
* In the console go to you project directory and type php yii serve
* Starting point http://localhost:8080/index.php?r=worked-parcel
