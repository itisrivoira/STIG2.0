package com.example.progetto_definitvo;

import androidx.appcompat.app.AppCompatActivity;
import androidx.core.content.ContextCompat;
import androidx.viewpager.widget.ViewPager;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.LinearLayout;
import android.widget.TextView;
import static android.graphics.Color.rgb;
import com.google.android.material.floatingactionbutton.FloatingActionButton;

import java.nio.channels.InterruptedByTimeoutException;
import java.util.Objects;


public class IntentActivity extends AppCompatActivity {

    private TextView txtTitolo = null;
    private Button btnGioca = null;
    private FloatingActionButton btnHelp = null;
    private ViewPager viewPager = null;
    private SliderAdapter sliderAdapter = null;
    private String titolo = null;
    private int immagine = 0;
    private int istruzioni = 0;
    private int testo_istruzioni = 0;
    private Intent intent;
    private int vite=0;


    //slider dei pallini
    private LinearLayout slider_bottoni = null;
    private int counter_pallini = 0;
    private ImageView[] image_pallini;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_intent_);
        int colore = rgb(44, 62, 80);
        getWindow().getDecorView().setBackgroundColor(colore); //sfondo ciano per la barra

        txtTitolo = findViewById(R.id.txtTitoloIntent);
        btnGioca = findViewById(R.id.btnGioca);
        btnHelp = findViewById(R.id.btnHelp);


        viewPager = findViewById(R.id.viewPager);

        slider_bottoni = (LinearLayout) findViewById(R.id.SliderDots); //slider pallini

        sliderAdapter = new SliderAdapter(getApplicationContext());
        viewPager.setAdapter(sliderAdapter);

        //counter pallini
        counter_pallini = sliderAdapter.getCount();
        image_pallini = new ImageView[counter_pallini];

        //setta i 3 pallini disattivati presi dall xml
        for (int i = 0; i < counter_pallini; i++) {
            image_pallini[i] = new ImageView(this);
            image_pallini[i].setImageDrawable(ContextCompat.getDrawable(getApplicationContext(), R.drawable.dot_disattivato));
            LinearLayout.LayoutParams params = new LinearLayout.LayoutParams(LinearLayout.LayoutParams.WRAP_CONTENT, LinearLayout.LayoutParams.WRAP_CONTENT);
            params.setMargins(8, 0, 8, 0);
            slider_bottoni.addView(image_pallini[i], params);
        }
        //codice per i pallini
        image_pallini[0].setImageDrawable(ContextCompat.getDrawable(getApplicationContext(), R.drawable.dot_attivo));

        viewPager.addOnPageChangeListener(new ViewPager.OnPageChangeListener() {
            @Override
            public void onPageScrolled(int position, float positionOffset, int positionOffsetPixels) {

            }

            @Override
            public void onPageSelected(int position) {
                for (int i = 0; i < counter_pallini; i++) {
                    image_pallini[i].setImageDrawable(ContextCompat.getDrawable(getApplicationContext(), R.drawable.dot_disattivato));
                }
                image_pallini[position].setImageDrawable(ContextCompat.getDrawable(getApplicationContext(), R.drawable.dot_attivo));

            }

            @Override
            public void onPageScrollStateChanged(int state) {

            }
        });

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
        istruzioni = getIntent().getExtras().getInt("titolo_istruzioni");
        testo_istruzioni = getIntent().getExtras().getInt("testo_istruzioni");
        txtTitolo.setText(titolo);
        txtTitolo.setTextColor(rgb(255,255,255)); //colore text bianco

        btnHelp.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                intent = new Intent(getApplicationContext(), HelpActivity.class);
                intent.putExtra("titolo_istruzioni", istruzioni);
                intent.putExtra("testo_istruzioni",testo_istruzioni);
                startActivity(intent);
            }
        });

        btnGioca.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if(titolo.equals("VIAGGIO NEL TEMPO DEI VERBI")) {
                    Intent intent2 = new Intent(getApplicationContext(), ViaggioNelTempoVerbiActivity.class);
                    if (viewPager.getCurrentItem()==0){
                        vite=5;
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

                }else if(titolo.equals("IMPICCANOME")){
                    Intent intent2 = new Intent(getApplicationContext(), ImpiccaNomeActivity.class);
                    if (viewPager.getCurrentItem()==0){

                    }
                    else if(viewPager.getCurrentItem()==1){

                    }else{

                    }

                }
            }
        });
    }
}
