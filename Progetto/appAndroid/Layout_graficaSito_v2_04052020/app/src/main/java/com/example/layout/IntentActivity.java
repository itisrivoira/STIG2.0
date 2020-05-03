package com.example.layout;

import androidx.appcompat.app.AppCompatActivity;
import androidx.viewpager.widget.ViewPager;

import android.content.Intent;
import android.graphics.Color;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageView;
import android.widget.TextView;

import com.google.android.material.floatingactionbutton.FloatingActionButton;

import java.util.Objects;

import static android.graphics.Color.rgb;

public class IntentActivity extends AppCompatActivity {

    private TextView txtTitolo = null;
    private ImageView imgGioco = null;
    private FloatingActionButton btnHelp = null;
    private ViewPager viewPager = null;
    private SliderAdapter sliderAdapter = null;
    private String titolo = null;
    private int immagine = 0;
    private int istruzioni = 0;
    private int testo_istruzioni = 0;
    private Intent intent;
    private int vite=0;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_intent);
        int colore = rgb(44, 62, 80);
        getWindow().getDecorView().setBackgroundColor(colore); //sfondo ciano per la barra

        txtTitolo = findViewById(R.id.txtTitoloIntent);
        imgGioco = findViewById(R.id.imgGioco);
        btnHelp = findViewById(R.id.btnHelp);


        viewPager = findViewById(R.id.viewPager);
        sliderAdapter = new SliderAdapter(getApplicationContext());
        viewPager.setAdapter(sliderAdapter);
    }

    @Override
    protected void onResume() {
        super.onResume();

        //view per lo sfondo verde acqua
        View view_sfondo = findViewById(R.id.view3_sfondo);
        int sfondo_view = rgb(26, 188, 156);
        view_sfondo.setBackgroundColor(sfondo_view);
        //-------------------------

        btnHelp.setBackgroundColor(rgb(44,62,80)); //colore blu ciano per il bottone
        titolo = Objects.requireNonNull(getIntent().getExtras()).getString("titolo");
        immagine = getIntent().getExtras().getInt("immagine");
        istruzioni = getIntent().getExtras().getInt("titolo_istruzioni");
        testo_istruzioni = getIntent().getExtras().getInt("testo_istruzioni");
        txtTitolo.setText(titolo);
        txtTitolo.setTextColor(rgb(255,255,255)); //colore text bianco
        imgGioco.setImageResource(immagine);

        btnHelp.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                intent = new Intent(getApplicationContext(), HelpActivity.class);
                intent.putExtra("titolo_istruzioni", istruzioni);
                intent.putExtra("testo_istruzioni",testo_istruzioni);
                startActivity(intent);
            }
        });

        imgGioco.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if(titolo.equals("VIAGGIO NEL TEMPO DEI VERBI")) {
                    Intent intent2 = new Intent(getApplicationContext(), GiocoDragAndDropScapFic.class);
                    if (viewPager.getCurrentItem()==0){
                        vite=999;
                        intent2.putExtra("Vite", vite);
                        startActivity(intent2);
                    }
                    else if(viewPager.getCurrentItem()==1){
                        vite=3;
                        intent2.putExtra("Vite", vite);
                        startActivity(intent2);
                    }else{
                        vite=1;
                        intent2.putExtra("Vite", vite);
                        startActivity(intent2);
                    }

                }
            }
        });
    }
}
