package com.example.progetto_definitvo;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.constraintlayout.widget.ConstraintLayout;
import androidx.viewpager.widget.PagerAdapter;

import java.util.Objects;

import static android.graphics.Color.rgb;

public class SliderAdapter extends PagerAdapter {

    Context context;
    LayoutInflater layoutInflater;



    public SliderAdapter(Context context) {
        this.context = context;
    }

    public int[] immagini = {
            R.drawable.facile,
            R.drawable.medio,
            R.drawable.difficile
    };

    public String[] titoli = {
            "FACILE",
            "MEDIO",
            "DIFFICILE"
    };

    @Override
    public int getCount() {
        return titoli.length;
    }

    @Override
    public boolean isViewFromObject(@NonNull View view, @NonNull Object object) {
        return view == object;
    }

    @NonNull
    @Override
    public Object instantiateItem(@NonNull ViewGroup container, int position) {
        layoutInflater = (LayoutInflater) context.getSystemService(Context.LAYOUT_INFLATER_SERVICE);
        View view = Objects.requireNonNull(layoutInflater).inflate(R.layout.activity_difficolta, container, false);
        ImageView imgDifficolta = view.findViewById(R.id.imgDifficolta);
        TextView txtDifficolta = view.findViewById(R.id.txtDifficolta);

        //colore e font
        txtDifficolta.setTextColor(rgb(255,255,255)); //colore testo facile , medio , difficile
        //Typeface mio_font = Typeface.createFromAsset(getAssets(),"fonts/arial.ttf");
        //txtDifficolta.setTypeface();
        //------------------
        imgDifficolta.setImageResource(immagini[position]);
        txtDifficolta.setText(titoli[position]);
        container.addView(view);
        return view;
    }

    @Override
    public void destroyItem(@NonNull ViewGroup container, int position, @NonNull Object object) {
        container.removeView((ConstraintLayout) object);
    }
}
