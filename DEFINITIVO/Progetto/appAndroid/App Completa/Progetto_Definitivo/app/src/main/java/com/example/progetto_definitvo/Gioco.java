package com.example.progetto_definitvo;

public class Gioco {

    private int img;
    private String nome;

    public Gioco(int img, String nome) {
        this.img = img;
        this.nome = nome;
    }

    public int getImg() {
        return img;
    }

    public void setImg(int img) {
        this.img = img;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }
}
