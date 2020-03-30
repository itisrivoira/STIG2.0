package com.example.layout;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.GridView;

import java.util.ArrayList;

public class MainActivity extends AppCompatActivity {

    private GridView gridGiochi = null;
    private ArrayList<Gioco> giochi = null;
    private Intent intent;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        gridGiochi = findViewById(R.id.gridGiochi);
        giochi = new ArrayList<>();
        giochi.add(new Gioco(R.drawable.s, "Sinonimi e contrari"));
        giochi.add(new Gioco(R.drawable.v, "Verbi"));
        giochi.add(new Gioco(R.drawable.a, "Articoli"));
        giochi.add(new Gioco(R.drawable.p, "Preposizioni"));
        giochi.add(new Gioco(R.drawable.n, "Nomi"));
        giochi.add(new Gioco(R.drawable.a, "Aggettivi"));

        CustomAdapter customAdapter = new CustomAdapter(getApplicationContext(), R.layout.grid_layout, giochi);
        gridGiochi.setAdapter(customAdapter);
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
                        intent.putExtra("titolo", "Sinonimi e contrari");
                        intent.putExtra("immagine", R.drawable.s);
                        intent.putExtra("istruzioni", R.string.txtHelpSinonimi);
                        startActivity(intent);
                        break;
                    case 1:
                        intent = new Intent(getApplicationContext(), IntentActivity.class);
                        intent.putExtra("titolo", "Verbi");
                        intent.putExtra("immagine", R.drawable.v);
                        intent.putExtra("istruzioni", R.string.txtHelpVerbi);
                        startActivity(intent);
                        break;
                    case 2:
                        intent = new Intent(getApplicationContext(), IntentActivity.class);
                        intent.putExtra("titolo", "Articoli");
                        intent.putExtra("immagine", R.drawable.a);
                        intent.putExtra("istruzioni", R.string.txtHelpArticoli);
                        startActivity(intent);
                        break;
                    case 3:
                        intent = new Intent(getApplicationContext(), IntentActivity.class);
                        intent.putExtra("titolo", "Preposizioni");
                        intent.putExtra("immagine", R.drawable.p);
                        intent.putExtra("istruzioni", R.string.txtHelpPreposizioni);
                        startActivity(intent);
                        break;
                    case 4:
                        intent = new Intent(getApplicationContext(), IntentActivity.class);
                        intent.putExtra("titolo", "Nomi");
                        intent.putExtra("immagine", R.drawable.n);
                        intent.putExtra("istruzioni", R.string.txtHelpNomi);
                        startActivity(intent);
                        break;
                    case 5:
                        intent = new Intent(getApplicationContext(), IntentActivity.class);
                        intent.putExtra("titolo", "Aggettivi");
                        intent.putExtra("immagine", R.drawable.a);
                        intent.putExtra("istruzioni", R.string.txtHelpAggettivi);
                        startActivity(intent);
                        break;
                }
            }
        });
    }
}
