package com.example.basicbankingapp.DB;

import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;
import android.util.Log;

import com.example.basicbankingapp.DB.UserContract.UserEntry;
import com.example.basicbankingapp.Data.User;

public class UserHelper extends SQLiteOpenHelper {

    String TABLE_NAME = UserEntry.TABLE_NAME;

    /** Name of the database file */
    private static final String DATABASE_NAME = "User.db";

    /**
     * Database version. If you change the database schema, you must increment the database version.*/
    private static final int DATABASE_VERSION = 1;

    public UserHelper(Context context) {
        super(context, DATABASE_NAME, null, DATABASE_VERSION);
    }

    @Override
    public void onCreate(SQLiteDatabase db) {
        // Create a String that contains the SQL statement to create the pets table
        String SQL_CREATE_USER_TABLE =  "CREATE TABLE " + UserEntry.TABLE_NAME + " ("
                + UserEntry.COLUMN_USER_ACCOUNT_NUMBER + " INTEGER, "
                + UserEntry.COLUMN_USER_NAME + " VARCHAR, "
                + UserEntry.COLUMN_USER_EMAIL + " VARCHAR, "
                + UserEntry.COLUMN_USER_IFSC_CODE + " VARCHAR, "
                + UserEntry.COLUMN_USER_PHONE_NO + " VARCHAR, "
                + UserEntry.COLUMN_USER_ACCOUNT_BALANCE + " INTEGER NOT NULL);";

        // Execute the SQL statement
        db.execSQL(SQL_CREATE_USER_TABLE);

        // Insert Into Table
        db.execSQL("insert into " + TABLE_NAME + " values(5641, 'Tyler Jones', 'tyler.jones@email.com','7584','7895641238', 18400)");
        db.execSQL("insert into " + TABLE_NAME + " values(1684, 'Samantha Lee', 'samantha.lee@email.com','1258','8995641238', 30100)");
        db.execSQL("insert into " + TABLE_NAME + " values(8674, 'David Chen', 'david.chen@email.com','8896','7595645896', 52000)");
        db.execSQL("insert into " + TABLE_NAME + " values(7189, 'Amanda Patel', 'amanda.patel@email.com','7752','9995640038', 38000)");
        db.execSQL("insert into " + TABLE_NAME + " values(5738, 'Ethan Baker', 'ethan.baker@email.com','3669','9095648962', 12000)");
        db.execSQL("insert into " + TABLE_NAME + " values(6785, 'Olivia Davis', 'olivia.davis@email.com','9985','8855640238', 65800)");
        db.execSQL("insert into " + TABLE_NAME + " values(7257, 'Matthew Garcia', 'matthew.garcia@email.com','1207','8895640215', 42300)");
        db.execSQL("insert into " + TABLE_NAME + " values(8785, 'Ava Rodriguez', 'ava.rodriguez@email.com','4522','9985021539', 76000)");
        db.execSQL("insert into " + TABLE_NAME + " values(9452, 'Andrew Kim', 'andrew.kim@email.com','6582','9309565238', 22000)");
        db.execSQL("insert into " + TABLE_NAME + " values(1099, 'Sophia Nguyen', 'sophia.nguyen@email.com','5450','8292591201', 55000)");
    }

    @Override
    public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {
        if (oldVersion != newVersion) {
            // Simplest implementation is to drop all old tables and recreate them
            db.execSQL("DROP TABLE IF EXISTS " + UserEntry.TABLE_NAME);
            onCreate(db);
        }
    }

    public Cursor readAllData() {
        SQLiteDatabase db = this.getWritableDatabase();
        Cursor cursor = db.rawQuery("select * from " + UserEntry.TABLE_NAME, null);
        return cursor;
    }

    public Cursor readParticularData (int accountNo) {
        SQLiteDatabase db = this.getWritableDatabase();
        Cursor cursor = db.rawQuery("select * from " + UserEntry.TABLE_NAME + " where " +
                                        UserEntry.COLUMN_USER_ACCOUNT_NUMBER + " = " + accountNo, null);
        return cursor;
    }

    public void updateAmount(int accountNo, int amount) {
        Log.d ("TAG", "update Amount");
        SQLiteDatabase db = this.getWritableDatabase();
        db.execSQL("update " + UserEntry.TABLE_NAME + " set " + UserEntry.COLUMN_USER_ACCOUNT_BALANCE + " = " + amount + " where " +
                UserEntry.COLUMN_USER_ACCOUNT_NUMBER + " = " + accountNo);
    }
}