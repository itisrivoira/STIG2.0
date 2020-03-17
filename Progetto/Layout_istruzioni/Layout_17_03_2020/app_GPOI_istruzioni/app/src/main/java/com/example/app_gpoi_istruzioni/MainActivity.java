package com.example.app_gpoi_istruzioni;

import androidx.appcompat.app.AppCompatActivity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class MainActivity extends AppCompatActivity {

    private Button btnGiocoIndicativo, btnGiocoSinomini, btnGiocoArticoli, btnGiocoPreposizioni, btnGiocoNomi, btnGiocoAggettivo = null;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        btnGiocoAggettivo = findViewById(R.id.btnGiocoAggettivo);
        btnGiocoArticoli = findViewById(R.id.btnGiocoArticoli);
        btnGiocoIndicativo = findViewById(R.id.btnGiocoIndicativo);
        btnGiocoNomi = findViewById(R.id.btnGiocoNomi);
        btnGiocoPreposizioni = findViewById(R.id.btnGiocoPreposizioni);
        btnGiocoSinomini = findViewById(R.id.btnGiocoSinomini);
    }

    @Override
    protected void onResume() {
        super.onResume();
        btnGiocoIndicativo.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent mioIntent = new Intent(getApplicationContext(),giocoIndicativoActivity.class);
                startActivity(mioIntent);
            }
        });
        btnGiocoSinomini.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent mioIntent = new Intent(getApplicationContext(),giocoSinominiActivity.class);
                startActivity(mioIntent);
            }
        });
        btnGiocoArticoli.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent mioIntent = new Intent(getApplicationContext(),giocoArticoliActivity.class);
                startActivity(mioIntent);
            }
        });
        btnGiocoPreposizioni.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent mioIntent = new Intent(getApplicationContext(),giocoPreposizioniActivity.class);
                startActivity(mioIntent);
            }
        });
        btnGiocoNomi.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent mioIntent = new Intent(getApplicationContext(),giocoNomiActivity.class);
                startActivity(mioIntent);
            }
        });
        btnGiocoAggettivo.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent mioIntent = new Intent(getApplicationContext(),giocoAggettivoActivity.class);
                startActivity(mioIntent);
            }
        });
    }
}