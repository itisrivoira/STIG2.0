package com.example.progetto_definitvo;

import androidx.appcompat.app.AppCompatActivity;

import android.graphics.Color;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.TextView;

import java.util.Objects;

import static android.graphics.Color.rgb;

public class HelpActivity extends AppCompatActivity {

    private TextView txt_titolo = null;
    private TextView txt_istruzioni = null;
    private View view_sfondo = null;
    private int sfondo_view = 0;
    private int istruzioni = 0;
    private int testo_istruzioni = 0;
    private int colore = 0;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_help);
        colore = rgb(44, 62, 80);
        getWindow().getDecorView().setBackgroundColor(colore); //barra blu ciano

        txt_titolo = findViewById(R.id.txtTitoloHelp);
        txt_istruzioni = findViewById(R.id.txtHelp);
    }

    @Override
    protected void onResume() {
        super.onResume();
        //colore verde acqua
        view_sfondo = findViewById(R.id.view_sfondo);
        sfondo_view = rgb(26, 188, 156);
        view_sfondo.setBackgroundColor(sfondo_view);

        istruzioni = Objects.requireNonNull(getIntent().getExtras()).getInt("titolo_istruzioni");
        txt_titolo.setTextColor(Color.rgb(255,255,255));
        txt_titolo.setText(istruzioni);
        Log.e("prova0", String.valueOf(istruzioni));

        testo_istruzioni = getIntent().getExtras().getInt("testo_istruzioni");
        txt_istruzioni.setTextColor(Color.rgb(255,255,255));
        txt_istruzioni.setText(testo_istruzioni);
        Log.e("prova1", String.valueOf(testo_istruzioni));
    }
}
