package com.example.layout;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.graphics.Color;
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
        setContentView(R.layout.activity_main);
        int colore = rgb(44, 62, 80);
        getWindow().getDecorView().setBackgroundColor(colore); //sfondo blu ciano come navbar sito

        gridGiochi = findViewById(R.id.gridGiochi);
        giochi = new ArrayList<>();
        giochi.add(new Gioco(R.drawable.sinonimi, "SINONIMI E CONTRARI"));
        giochi.add(new Gioco(R.drawable.verbi, "VERBI"));
        giochi.add(new Gioco(R.drawable.circus, "Gioco 3"));
        giochi.add(new Gioco(R.drawable.circus, "Gioco 4"));
        giochi.add(new Gioco(R.drawable.circus, "Gioco 5"));
        giochi.add(new Gioco(R.drawable.circus, "Gioco 6"));
        giochi.add(new Gioco(R.drawable.circus, "Gioco 7"));
        giochi.add(new Gioco(R.drawable.circus, "Gioco 8"));
        giochi.add(new Gioco(R.drawable.circus, "Gioco 9"));
        giochi.add(new Gioco(R.drawable.circus, "Gioco 10"));

        CustomAdapter customAdapter = new CustomAdapter(getApplicationContext(), R.layout.grid_layout, giochi);

        gridGiochi.setAdapter(customAdapter);
        int colore_grid = rgb(26, 188, 156);
        gridGiochi.setBackgroundColor(colore_grid); //sfondo verde acqua come sito per la grid
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
                        intent.putExtra("titolo", "SINONIMI E CONTRARI");
                        intent.putExtra("immagine", R.drawable.sinonimi);
                        intent.putExtra("istruzioni", R.string.txtHelpSinonimi);
                        startActivity(intent);
                        break;
                    case 1:
                        intent = new Intent(getApplicationContext(), IntentActivity.class);
                        intent.putExtra("titolo", "VERBI");
                        intent.putExtra("immagine", R.drawable.verbi);
                        intent.putExtra("istruzioni", R.string.txtHelpVerbi);
                        startActivity(intent);
                        break;
                }
            }
        });
    }
}
