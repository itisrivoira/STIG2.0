package com.example.app_gpoi_istruzioni;

import androidx.appcompat.app.AppCompatActivity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import java.util.ArrayList;

public class MainActivity extends AppCompatActivity {

    private Button btnGiocoIndicativo, btnGiocoSinomini, btnGiocoArticoli, btnGiocoPreposizioni, btnGiocoNomi;
    private ArrayList<Button> nomeGiochi = new ArrayList<>();
    private ArrayList<Class> nomeClassi = new ArrayList<>();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        btnGiocoArticoli = findViewById(R.id.btnGiocoArticoli);
        btnGiocoIndicativo = findViewById(R.id.btnGiocoIndicativo);
        btnGiocoNomi = findViewById(R.id.btnGiocoNomi);
        btnGiocoPreposizioni = findViewById(R.id.btnGiocoPreposizioni);

        //Aggiunge all'ArrayList i Button
        nomeGiochi.add(btnGiocoArticoli);
        nomeGiochi.add(btnGiocoIndicativo);
        nomeGiochi.add(btnGiocoNomi);
        nomeGiochi.add(btnGiocoPreposizioni);

        //Aggiunge all'ArrayList le classi
        nomeClassi.add(giocoArticoliActivity.class);
        nomeClassi.add(giocoIndicativoActivity.class);
        nomeClassi.add(giocoNomiActivity.class);
        nomeClassi.add(giocoPreposizioniActivity.class);
    }

    @Override
    protected void onResume() {
        super.onResume();
        for(int i = 0; i < nomeGiochi.size(); i++){
            final int finalI = i;
            nomeGiochi.get(i).setOnClickListener(new View.OnClickListener() {
                @Override
                public void onClick(View v) {
                    Intent mioIntent = new Intent(getApplicationContext(),nomeClassi.get(finalI));
                    startActivity(mioIntent);
                }
            });
        }

    }
}