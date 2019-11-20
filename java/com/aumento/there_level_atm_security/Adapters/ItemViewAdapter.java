package com.aumento.there_level_atm_security.Adapters;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

import androidx.cardview.widget.CardView;
import androidx.recyclerview.widget.RecyclerView;

import com.aumento.there_level_atm_security.R;
import com.aumento.there_level_atm_security.pogo.content;

import java.util.ArrayList;

/**
 * Created by MyPc on 04-10-2017.
 */

public class ItemViewAdapter extends RecyclerView.Adapter<ItemViewAdapter.ItemViewHolder> {

    private Context mcontext;
    private ArrayList<content> arrayList;


    public ItemViewAdapter(Context mcontext, ArrayList<content> arrayList) {
        this.mcontext = mcontext;
        this.arrayList = arrayList;
    }



    @Override
    public ItemViewHolder onCreateViewHolder(ViewGroup parent, int viewType) {

        LayoutInflater layoutInflater= LayoutInflater.from(parent.getContext());
        View view=layoutInflater.from(parent.getContext()).inflate(R.layout.card_item,parent,false);
        ItemViewHolder itemViewHolder= new ItemViewHolder(view);
        return  itemViewHolder;
    }

    @Override
    public void onBindViewHolder(ItemViewHolder holder, int position) {

        final content item = arrayList.get(position);

        holder.subject.setText(item.getSubject());
        holder.cont.setText(item.getContents());
        holder.datee.setText(item.getDates());

    }

    @Override
    public int getItemCount() {
        if (arrayList != null) {
            return arrayList.size();

        }

        return 0;
    }

    public static class ItemViewHolder extends RecyclerView.ViewHolder{


        public CardView cardView;
        public TextView subject;
        public TextView cont;
        public TextView datee;

        public ItemViewHolder(View itemView) {
            super(itemView);

            cardView=(CardView)itemView.findViewById(R.id.card_view);
            subject=(TextView)itemView.findViewById(R.id.c_subject);

            cont=(TextView)itemView.findViewById(R.id.c_content);
            datee=(TextView)itemView.findViewById(R.id.c_date);




        }
    }


}
