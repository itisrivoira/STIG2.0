package com.example.layout;

import androidx.annotation.DrawableRes;
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
import android.widget.Toast;

import com.example.layout.R;

public class GiocoDragAndDropScapFic extends AppCompatActivity {
    private TextView txt1,txt2,txt3,txt4,txt5,txt6;
    private ImageView imageView,vita1,vita2,vita3;
    private int contatore=0;
    private int ok=0;
    private int errori=0;
    private int vite=0;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_gioco_drag_and_drop_scap_fic);
        txt1=findViewById(R.id.txt1);
        txt2=findViewById(R.id.txt2);
        txt3=findViewById(R.id.txt3);
        txt4=findViewById(R.id.txt4);
        txt5=findViewById(R.id.txt5);
        txt6=findViewById(R.id.txt6);
        imageView=findViewById(R.id.imageView2);
        vita1=findViewById(R.id.imageView);
        vita2=findViewById(R.id.imageView3);
        vita3=findViewById(R.id.imageView4);
        vite=getIntent().getExtras().getInt("Vite");
        txt1.setOnTouchListener(tocco);
        txt2.setOnTouchListener(tocco);
        txt3.setOnTouchListener(tocco);
        txt4.setOnTouchListener(tocco);
        txt5.setOnTouchListener(tocco);
        txt6.setOnTouchListener(tocco);
        if (vite==999){
            vita1.setVisibility(View.GONE);
            vita2.setImageResource(R.drawable.infinito);
            vita3.setVisibility(View.GONE);
        }else if(vite==1){
            vita1.setVisibility(View.GONE);
            vita3.setVisibility(View.GONE);
        }
        imageView.setOnDragListener(dragListener);
    }

    View.OnTouchListener tocco=new View.OnTouchListener() {
        @RequiresApi(api = Build.VERSION_CODES.N)
        @Override
        public boolean onTouch(View v, MotionEvent event) {
            ClipData data=ClipData.newPlainText("","");
            View.DragShadowBuilder myShadowBuilder= new View.DragShadowBuilder(v);
            v.startDragAndDrop(data,myShadowBuilder,v,0);
            imageView.setImageResource(R.drawable.immagine);
            return true;
        }
    };
    View.OnDragListener dragListener= new View.OnDragListener() {
        @Override
        public boolean onDrag(View v, DragEvent event) {
            int dragEvent=event.getAction();
            switch (dragEvent){
                case DragEvent.ACTION_DRAG_ENTERED:
                    break;
                case DragEvent.ACTION_DRAG_EXITED:
                    break;
                case DragEvent.ACTION_DROP:
                    final View view2 =(View) event.getLocalState();
                    if (view2.getId()==R.id.txt1){
                        txt1.setVisibility(View.GONE);
                        giusto();
                        controlla();
                    }else if (view2.getId()==R.id.txt2){
                        txt2.setVisibility(View.GONE);
                        sbagliato();
                        togliCuore();
                        controlla();
                    }else if(view2.getId()==R.id.txt3){
                        txt3.setVisibility(View.GONE);
                        giusto();
                        controlla();
                    }
                    else if(view2.getId()==R.id.txt4){
                        txt4.setVisibility(View.GONE);
                        giusto();
                        controlla();
                    }
                    else if (view2.getId()==R.id.txt5){
                        txt5.setVisibility(View.GONE);
                        sbagliato();
                        togliCuore();
                        controlla();
                    }
                    else if (view2.getId()==R.id.txt6){
                        txt6.setVisibility(View.GONE);
                        sbagliato();
                        togliCuore();
                        controlla();
                    }
                    break;
            }
            return true;
        }
    };

    private void giusto() {
        imageView.setImageResource(R.drawable.immagine2);
        contatore=contatore+1;
        ok=ok+1;
    }

    private void sbagliato() {
        imageView.setImageResource(R.drawable.immagine3);
        errori=errori+1;
        contatore=contatore+1;
    }

    private void togliCuore() {
        if (vite!=999){
            if (errori==1){
                vita3.setVisibility(View.GONE);
            }
            if (errori==2){
                vita2.setVisibility(View.GONE);
            }
            if (errori==3){
                vita1.setVisibility(View.GONE);
            }
        }
    }

    private void controlla() {
        if (ok==3){
            Intent intent= new Intent(this,ResocontoScapFic.class);
            intent.putExtra("Errori",String.valueOf(errori));
            intent.putExtra("Corrette",String.valueOf(ok));
            intent.putExtra("Vittoria","Vinto");
            startActivity(intent);
        }else if(errori==vite){
                Intent intent= new Intent(this,ResocontoScapFic.class);
                intent.putExtra("Errori",String.valueOf(errori));
                intent.putExtra("Corrette",String.valueOf(ok));
            intent.putExtra("Vittoria","Perso");;
                startActivity(intent);
            }
    }

}
