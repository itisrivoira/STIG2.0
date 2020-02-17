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
        giochi.add(new Gioco(R.drawable.sinonimi, "Sinonimi e contrari"));
        giochi.add(new Gioco(R.drawable.verbi, "Verbi"));
        giochi.add(new Gioco(R.drawable.ic_launcher_background, "Gioco 3"));
        giochi.add(new Gioco(R.drawable.ic_launcher_background, "Gioco 4"));
        giochi.add(new Gioco(R.drawable.ic_launcher_background, "Gioco 5"));
        giochi.add(new Gioco(R.drawable.ic_launcher_background, "Gioco 6"));
        giochi.add(new Gioco(R.drawable.ic_launcher_background, "Gioco 7"));
        giochi.add(new Gioco(R.drawable.ic_launcher_background, "Gioco 8"));
        giochi.add(new Gioco(R.drawable.ic_launcher_background, "Gioco 9"));
        giochi.add(new Gioco(R.drawable.ic_launcher_background, "Gioco 10"));

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
                        intent.putExtra("immagine", R.drawable.sinonimi);
                        intent.putExtra("istruzioni", R.string.txtHelpSinonimi);
                        startActivity(intent);
                        break;
                    case 1:
                        intent = new Intent(getApplicationContext(), IntentActivity.class);
                        intent.putExtra("titolo", "Verbi");
                        intent.putExtra("immagine", R.drawable.verbi);
                        intent.putExtra("istruzioni", R.string.txtHelpVerbi);
                        startActivity(intent);
                        break;
                }
            }
        });
    }
}
