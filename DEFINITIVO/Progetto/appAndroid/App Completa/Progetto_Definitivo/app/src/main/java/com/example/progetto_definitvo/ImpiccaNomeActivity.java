package com.example.progetto_definitvo;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

public class ImpiccaNomeActivity extends AppCompatActivity implements View.OnClickListener {

    private TextView txtParola;
    private String str = "";
    private int vinto = 0;
    int f = 0;
    private ImageView imgUomo;
    private Boolean giocata1 = true;
    private String parola = "pallacocca";
    private int[] foto = {R.drawable.hm5,R.drawable.hm6,R.drawable.hm7,R.drawable.hm8,R.drawable.hm9,R.drawable.hm10};
    private char[] array = parola.toCharArray();
    private Button btnA, btnB, btnC, btnD, btnE, btnF, btnG, btnH, btnI, btnL, btnM, btnN, btnO, btnP, btnQ, btnR, btnS, btnT, btnU, btnV, btnZ;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_impicca_nome);
        txtParola = findViewById(R.id.txtParola);
        int i=0;
        String str1 = "";
        while(i<parola.length()){
            str1 = str1 + "_ ";
            i++;
        }
        txtParola.setText(str1);
        imgUomo = findViewById(R.id.imgUomo);
        btnA = findViewById(R.id.btnA);
        btnB = findViewById(R.id.btnB);
        btnC = findViewById(R.id.btnC);
        btnD = findViewById(R.id.btnD);
        btnE = findViewById(R.id.btnE);
        btnF = findViewById(R.id.btnF);
        btnG = findViewById(R.id.btnG);
        btnH = findViewById(R.id.btnH);
        btnI = findViewById(R.id.btnI);
        btnL = findViewById(R.id.btnL);
        btnM = findViewById(R.id.btnM);
        btnN = findViewById(R.id.btnN);
        btnO = findViewById(R.id.btnO);
        btnP = findViewById(R.id.btnP);
        btnQ = findViewById(R.id.btnQ);
        btnR = findViewById(R.id.btnR);
        btnS = findViewById(R.id.btnS);
        btnT = findViewById(R.id.btnT);
        btnU = findViewById(R.id.btnU);
        btnV = findViewById(R.id.btnV);
        btnZ = findViewById(R.id.btnZ);

        btnA.setOnClickListener(this);
        btnB.setOnClickListener(this);
        btnC.setOnClickListener(this);
        btnD.setOnClickListener(this);
        btnE.setOnClickListener(this);
        btnF.setOnClickListener(this);
        btnG.setOnClickListener(this);
        btnH.setOnClickListener(this);
        btnI.setOnClickListener(this);
        btnL.setOnClickListener(this);
        btnM.setOnClickListener(this);
        btnN.setOnClickListener(this);
        btnO.setOnClickListener(this);
        btnP.setOnClickListener(this);
        btnQ.setOnClickListener(this);
        btnR.setOnClickListener(this);
        btnS.setOnClickListener(this);
        btnT.setOnClickListener(this);
        btnU.setOnClickListener(this);
        btnV.setOnClickListener(this);
        btnZ.setOnClickListener(this);
    }

    @Override
    public void onClick(View v) {
        switch(v.getId()){
            case R.id.btnA:
                String a = giocata("a",parola,str);
                str=a;
                btnA.setEnabled(false);
                vittoria(vinto);
                break;
            case R.id.btnB:
                String b = giocata("b",parola,str);
                str=b;
                btnB.setEnabled(false);
                vittoria(vinto);
                break;
            case R.id.btnC:
                String c = giocata("c",parola,str);
                str=c;
                btnC.setEnabled(false);
                vittoria(vinto);
                break;
            case R.id.btnD:
                String d = giocata("d",parola,str);
                str=d;
                btnD.setEnabled(false);
                vittoria(vinto);
                break;
            case R.id.btnE:
                String e = giocata("e",parola,str);
                str=e;
                btnE.setEnabled(false);
                vittoria(vinto);
                break;
            case R.id.btnF:
                String f = giocata("f",parola,str);
                str=f;
                btnF.setEnabled(false);
                vittoria(vinto);
                break;
            case R.id.btnG:
                String g = giocata("g",parola,str);
                str=g;
                btnG.setEnabled(false);
                vittoria(vinto);
                break;
            case R.id.btnH:
                String h = giocata("h",parola,str);
                str=h;
                btnH.setEnabled(false);
                vittoria(vinto);
                break;
            case R.id.btnI:
                String i = giocata("i",parola,str);
                str=i;
                btnI.setEnabled(false);
                vittoria(vinto);
                break;
            case R.id.btnL:
                String l = giocata("l",parola,str);
                str=l;
                btnL.setEnabled(false);
                vittoria(vinto);
                break;
            case R.id.btnM:
                String m = giocata("m",parola,str);
                str=m;
                btnM.setEnabled(false);
                vittoria(vinto);
                break;
            case R.id.btnN:
                String n = giocata("n",parola,str);
                str=n;
                btnN.setEnabled(false);
                vittoria(vinto);
                break;
            case R.id.btnO:
                String o = giocata("o",parola,str);
                str=o;
                btnO.setEnabled(false);
                vittoria(vinto);
                break;
            case R.id.btnP:
                String p = giocata("p",parola,str);
                str=p;
                btnP.setEnabled(false);
                vittoria(vinto);
                break;
            case R.id.btnQ:
                String q = giocata("q",parola,str);
                str=q;
                btnQ.setEnabled(false);
                vittoria(vinto);
                break;
            case R.id.btnR:
                String r = giocata("r",parola,str);
                str=r;
                btnR.setEnabled(false);
                vittoria(vinto);
                break;
            case R.id.btnS:
                String s = giocata("s",parola,str);
                str=s;
                btnS.setEnabled(false);
                vittoria(vinto);
                break;
            case R.id.btnT:
                String t = giocata("t",parola,str);
                str=t;
                btnT.setEnabled(false);
                vittoria(vinto);
                break;
            case R.id.btnU:
                String u = giocata("u",parola,str);
                str=u;
                btnU.setEnabled(false);
                vittoria(vinto);
                break;
            case R.id.btnV:
                String vi = giocata("v",parola,str);
                str=vi;
                btnV.setEnabled(false);
                vittoria(vinto);
                break;
            case R.id.btnZ:
                String z = giocata("z",parola,str);
                str=z;
                btnZ.setEnabled(false);
                vittoria(vinto);
                break;
        }
    }

    public String giocata(String lettera, String parola, String str){
        if(parola.contains(lettera)) {
            for (int i = 0; i < parola.length(); i++) {
                if(String.valueOf(array[i]).equals(lettera)) {
                    int posizione = i;
                    str = setParola(lettera, posizione, str);
                }
            }
            txtParola.setText(str);
        }else{
            if(f<=5) {
                imgUomo.setImageResource(foto[f]);
                f++;
            }
        }
        return str;
    }

    public String setParola(String lettera, int posizione, String str) {
        vinto++;
        if(giocata1){
            int i=1;
            while(i<=posizione){
                str=str+"_ ";
                i++;
            }
            str=str+lettera;
            while(posizione+1<parola.length()){
                str=str+" _";
                posizione++;
            }
            giocata1=false;
        }else {
            str = new StringBuilder(str).deleteCharAt(posizione + posizione).toString();
            str = new StringBuilder(str).insert(posizione + posizione, lettera).toString();
        }
        return str;
    }

    public void vittoria(int vinto){
        Toast.makeText(getApplicationContext(),String.valueOf(f),Toast.LENGTH_LONG).show();
        if(f==6){
            Intent perso = new Intent(getApplicationContext(),ImpiccaNomePersoActivity.class);
            perso.putExtra("parola",parola);
            reset();
            startActivity(perso);
        }else if (vinto==parola.length()){
            Intent intvinto = new Intent(getApplicationContext(),ImpiccaNomeVintoActivity.class);
            intvinto.putExtra("parola",parola);
            reset();
            startActivity(intvinto);
        }
    }

    void reset(){
        str="";
        f=0;
        vinto=0;
        giocata1=true;
        parola="alfa";
        array = parola.toCharArray();
    }
}
