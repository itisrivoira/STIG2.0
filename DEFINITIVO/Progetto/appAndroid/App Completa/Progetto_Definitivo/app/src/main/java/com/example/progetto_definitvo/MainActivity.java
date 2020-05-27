package com.example.progetto_definitvo;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.GridView;

import java.util.ArrayList;

import static android.graphics.Color.rgb;

public class MainActivity extends AppCompatActivity {

    private GridView gridGiochi = null;
    private ArrayList<Gioco> giochi = null;
    private Intent intent;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_elenco_giochi);
        int colore = rgb(44, 62, 80);
        getWindow().getDecorView().setBackgroundColor(colore); //sfondo blu ciano come navbar sito

        gridGiochi = findViewById(R.id.gridGiochi);
        giochi = new ArrayList<>();
        giochi.add(new Gioco(R.drawable.circus, "OCCHIO ALL'IMPICCATO"));
        giochi.add(new Gioco(R.drawable.circus, "VIAGGIO NEL TEMPO DEI VERBI"));
        giochi.add(new Gioco(R.drawable.circus, "DRAG THE ARTICLE"));
        giochi.add(new Gioco(R.drawable.circus, "THE PREPOSITION'S TABLE"));
        giochi.add(new Gioco(R.drawable.circus, "IMPICCANOME"));
        giochi.add(new Gioco(R.drawable.circus, "RICONOSCI L'AGGETTIVO "));


        CustomAdapter customAdapter = new CustomAdapter(getApplicationContext(), R.layout.grid_layout, giochi);

        gridGiochi.setAdapter(customAdapter);
        int colore_grid = rgb(26, 188, 156);
        gridGiochi.setBackgroundColor(colore_grid); //sfondo verde acqua come sito per la gr
    }

    @Override
    protected void onResume() {
        super.onResume();
        gridGiochi.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
                switch (position) {
                    case 0:
                        intent = new Intent(getApplicationContext(), IntentActivity.class);
                        intent.putExtra("titolo", "OCCHIO ALL'IMPICCATO");
                        intent.putExtra("immagine", R.drawable.circus);
                        intent.putExtra("titolo_istruzioni", R.string.txtHelpSinonimi);
                        intent.putExtra("testo_istruzioni", R.string.testo_sinonimi);
                        startActivity(intent);
                        break;
                    case 1:
                        intent = new Intent(getApplicationContext(), IntentActivity.class);
                        intent.putExtra("titolo", "VIAGGIO NEL TEMPO DEI VERBI");
                        intent.putExtra("immagine", R.drawable.circus);
                        intent.putExtra("titolo_istruzioni", R.string.txtHelpVerbi);
                        intent.putExtra("testo_istruzioni", R.string.testo_verbi);
                        startActivity(intent);
                        break;

                    case 2:
                        intent = new Intent(getApplicationContext(), IntentActivity.class);
                        intent.putExtra("titolo", "DRAG THE ARTICLE");
                        intent.putExtra("immagine", R.drawable.circus);
                        intent.putExtra("titolo_istruzioni", R.string.txtHelpArticoli);
                        intent.putExtra("testo_istruzioni", R.string.testo_articoli);
                        startActivity(intent);
                        break;
                    case 3:
                        intent = new Intent(getApplicationContext(), IntentActivity.class);
                        intent.putExtra("titolo", "THE PREPOSITION'S TABLE");
                        intent.putExtra("immagine", R.drawable.circus);
                        intent.putExtra("titolo_istruzioni", R.string.txtHelpPreposizioni);
                        intent.putExtra("testo_istruzioni", R.string.testo_preposizioni);
                        startActivity(intent);
                        break;

                    case 4:
                        intent = new Intent(getApplicationContext(), IntentActivity.class);
                        intent.putExtra("titolo", "IMPICCANOME");
                        intent.putExtra("immagine", R.drawable.circus);
                        intent.putExtra("titolo_istruzioni", R.string.txtHelpNomi);
                        intent.putExtra("testo_istruzioni", R.string.testo_nomi);
                        startActivity(intent);
                        break;

                    case 5:
                        intent = new Intent(getApplicationContext(), IntentActivity.class);
                        intent.putExtra("titolo", "RICONOSCI L'AGGETTIVO");
                        intent.putExtra("immagine", R.drawable.circus);
                        intent.putExtra("titolo_istruzioni", R.string.txtHelpAggettivi);
                        intent.putExtra("testo_istruzioni", R.string.testo_aggettivi);
                        startActivity(intent);
                        break;


                }
            }
        });
    }
}
