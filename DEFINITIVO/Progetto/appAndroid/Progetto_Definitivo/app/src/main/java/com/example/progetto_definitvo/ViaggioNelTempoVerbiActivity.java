package com.example.progetto_definitvo;

import androidx.annotation.RequiresApi;
import androidx.appcompat.app.AppCompatActivity;

import android.content.ClipData;
import android.content.Intent;
import android.os.Build;
import android.os.Bundle;
import android.view.DragEvent;
import android.view.MotionEvent;
import android.view.View;
import android.widget.ImageView;
import android.widget.TextView;

public class ViaggioNelTempoVerbiActivity extends AppCompatActivity {

    private TextView txt1, txt2, txt3;
    private ImageView imgCorretto, vita1, vita2, vita3, vita4, vita5, imgErrore;
    private int contatore = 0;
    private int ok = 0;
    private int errori = 0;
    private int vite = 0;
    private int cont = 0;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_viaggio_nel_tempo_verbi);
        txt1 = findViewById(R.id.txt1);
        txt2 = findViewById(R.id.txt2);
        txt3 = findViewById(R.id.txt3);
        imgCorretto = findViewById(R.id.imageView2);
        imgErrore = findViewById(R.id.imageView3);
        vita1 = findViewById(R.id.Vita1);
        vita2 = findViewById(R.id.Vita2);
        vita3 = findViewById(R.id.Vita3);
        vita4 = findViewById(R.id.Vita4);
        vita5 = findViewById(R.id.Vita5);
        vite = getIntent().getExtras().getInt("Vite");
        txt1.setOnTouchListener(tocco);
        txt2.setOnTouchListener(tocco);
        txt3.setOnTouchListener(tocco);
        if (vite == 3) {
            vita1.setVisibility(View.GONE);
            vita5.setVisibility(View.GONE);
        } else if (vite == 1) {
            vita1.setVisibility(View.GONE);
            vita2.setVisibility(View.GONE);
            vita4.setVisibility(View.GONE);
            vita5.setVisibility(View.GONE);
        }
        imgCorretto.setOnDragListener(dragListenerCorretto);
        imgErrore.setOnDragListener(dragListenerErrore);
    }

    View.OnTouchListener tocco = new View.OnTouchListener() {
        @RequiresApi(api = Build.VERSION_CODES.N)
        @Override
        public boolean onTouch(View v, MotionEvent event) {
            ClipData data = ClipData.newPlainText("", "");
            View.DragShadowBuilder myShadowBuilder = new View.DragShadowBuilder(v);
            v.startDragAndDrop(data, myShadowBuilder, v, 0);
            return true;
        }
    };
    View.OnDragListener dragListenerCorretto = new View.OnDragListener() {
        @Override
        public boolean onDrag(View v, DragEvent event) {
            int dragEvent = event.getAction();
            switch (dragEvent) {
                case DragEvent.ACTION_DRAG_ENTERED:
                    break;
                case DragEvent.ACTION_DRAG_EXITED:
                    break;
                case DragEvent.ACTION_DROP:
                    final View view2 = (View) event.getLocalState();
                    if (view2.getId() == R.id.txt1) {
                        txt1.setVisibility(View.GONE);
                        contatore();
                    } else if (view2.getId() == R.id.txt2) {
                        txt2.setVisibility(View.GONE);
                        errore();
                        contatore();
                    } else if (view2.getId() == R.id.txt3) {
                        txt3.setVisibility(View.GONE);
                        contatore();
                    }
            }
            return true;
        }
    };
    View.OnDragListener dragListenerErrore = new View.OnDragListener() {
        @Override
        public boolean onDrag(View v, DragEvent event) {
            int dragEvent = event.getAction();
            switch (dragEvent) {
                case DragEvent.ACTION_DRAG_ENTERED:
                    break;
                case DragEvent.ACTION_DRAG_EXITED:
                    break;
                case DragEvent.ACTION_DROP:
                    final View view2 = (View) event.getLocalState();
                    if (view2.getId() == R.id.txt1) {
                        txt1.setVisibility(View.GONE);
                        errore();
                        contatore();
                    } else if (view2.getId() == R.id.txt2) {
                        txt2.setVisibility(View.GONE);
                        contatore();
                    } else if (view2.getId() == R.id.txt3) {
                        txt3.setVisibility(View.GONE);
                        errore();
                        contatore();

                    }
            }
            return true;
        }
    };

    private void errore() {
        errori = errori + 1;
    }

    private void contatore() {
        contatore = contatore + 1;
        if (contatore == 3) {
            if (errori > 0) {
                togliCuore(vite);
                vite=vite-1;
                reset();
            }else{
                vinto();
            }
        }
    }

    private void reset() {
        txt1.setVisibility(View.VISIBLE);
        txt2.setVisibility(View.VISIBLE);
        txt3.setVisibility(View.VISIBLE);
        cont=0;
        errori=0;
        contatore=0;
    }

    private void togliCuore(int val) {
        if (val == 5) {

            vita5.setAlpha(0.50f);
        } else if (val == 4) {
            vita4.setAlpha(0.50f);
        } else if (val == 3) {
            vita3.setAlpha(0.50f);
        } else if (val == 2) {
            vita2.setAlpha(0.50f);
        } else if (val == 1) {
            vita1.setAlpha(0.50f);
            perso();
        }
    }

    private void perso() {
        Intent intent = new Intent(this, ResocontoViaggioNelTempoVerbiActivity.class);
        intent.putExtra("Errori", String.valueOf(errori));
        intent.putExtra("Corrette", String.valueOf(ok));
        intent.putExtra("Vittoria", "Perso");
        startActivity(intent);
    }
    private void vinto() {
        Intent intent = new Intent(this, ResocontoViaggioNelTempoVerbiActivity.class);
        intent.putExtra("Errori", String.valueOf(errori));
        intent.putExtra("Corrette", String.valueOf(ok));
        intent.putExtra("Vittoria", "Vinto");
        startActivity(intent);
    }
}
