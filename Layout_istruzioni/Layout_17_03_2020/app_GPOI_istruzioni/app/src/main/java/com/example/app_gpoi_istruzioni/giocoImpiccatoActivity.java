package com.example.app_gpoi_istruzioni;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;

import com.google.android.material.floatingactionbutton.FloatingActionButton;

public class giocoImpiccatoActivity extends AppCompatActivity {

    private FloatingActionButton btnIstruzioni = null;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_gioco_impiccato);
        btnIstruzioni = findViewById(R.id.btnIstruzioni);
    }


    @Override
    protected void onResume() {
        super.onResume();
        btnIstruzioni.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent mioIntent = new Intent(getApplicationContext(),ArticoliIstruzioniActivity.class);
                startActivity(mioIntent);
            }
        });
    }
}
