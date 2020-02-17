package com.example.layout;

import android.annotation.SuppressLint;
import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;

import java.util.List;

public class CustomAdapter extends ArrayAdapter<Gioco> {

    public CustomAdapter(@NonNull Context context, int resource, @NonNull List<Gioco> objects) {
        super(context, resource, objects);
    }

    @SuppressLint("ViewHolder")
    @NonNull
    @Override
    public View getView(int position, @Nullable View convertView, @NonNull ViewGroup parent) {
        LayoutInflater inflater = (LayoutInflater) getContext().getSystemService(Context.LAYOUT_INFLATER_SERVICE);
        convertView = inflater.inflate(R.layout.grid_layout, null);

        ImageView imgGioco = convertView.findViewById(R.id.imgGioco);
        TextView txtGioco = convertView.findViewById(R.id.txtGioco);

        imgGioco.setImageResource(getItem(position).getImg());
        txtGioco.setText(getItem(position).getNome());
        return convertView;
    }
}
